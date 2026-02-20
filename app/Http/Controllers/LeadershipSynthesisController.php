<?php

namespace App\Http\Controllers;

use App\Models\LeadershipSynthesis;
use App\Models\MiniExperienceProfile;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use RuntimeException;
use Throwable;

class LeadershipSynthesisController extends Controller
{
    public function __invoke(Request $request): JsonResponse
    {
        $validated = $request->validate([
            'first_name' => ['required', 'string', 'max:60'],
            'last_name' => ['nullable', 'string', 'max:60'],
            'name' => ['required', 'string', 'max:120'],
            'age' => ['nullable', 'integer', 'min:0', 'max:120'],
            'description' => ['required', 'string', 'max:1200'],
            'education_level' => ['nullable', 'string', 'max:120'],
            'answers' => ['required', 'array', 'min:1', 'max:30'],
            'answers.*' => ['string', 'max:500'],
        ]);

        $apiKey = (string) env('HUGGINGFACE_API_KEY', '');
        $model = (string) env('HUGGINGFACE_MODEL', 'Qwen/Qwen2.5-7B-Instruct');
        $routerBase = rtrim((string) env('HUGGINGFACE_ROUTER_BASE', 'https://router.huggingface.co/v1/chat/completions'), '/');
        $verifySsl = filter_var(env('HUGGINGFACE_VERIFY_SSL', true), FILTER_VALIDATE_BOOLEAN);

        if ($apiKey === '') {
            return response()->json([
                'error' => 'HUGGINGFACE_API_KEY est manquante dans la configuration serveur.',
            ], 500);
        }

        $prompt = $this->buildPrompt(
            (string) $validated['first_name'],
            (string) ($validated['last_name'] ?? ''),
            (string) $validated['name'],
            (string) $validated['description'],
            (string) ($validated['education_level'] ?? ''),
            $validated['answers']
        );

        $requestBuilder = Http::withToken($apiKey)
            ->acceptJson()
            ->timeout(40);

        if (!$verifySsl) {
            $requestBuilder = $requestBuilder->withOptions(['verify' => false]);
        }

        try {
            $response = $requestBuilder->post($routerBase, [
                'model' => $model,
                'messages' => [
                    [
                        'role' => 'system',
                        'content' => "Tu rediges uniquement en francais. Ton motivant, clair et structure. Texte brut uniquement. Pas de Markdown, pas de symboles speciaux.",
                    ],
                    [
                        'role' => 'user',
                        'content' => $prompt,
                    ],
                ],
                'temperature' => 0.6,
                'max_tokens' => 900,
            ]);
        } catch (Throwable $exception) {
            return response()->json([
                'error' => 'Impossible de generer la synthese.',
                'details' => $exception->getMessage(),
            ], 502);
        }

        if (!$response->successful()) {
            return response()->json([
                'error' => 'Impossible de generer la synthese.',
                'details' => $response->json('error') ?: $response->json('message') ?: ('Hugging Face HTTP ' . $response->status()),
            ], $response->status());
        }

        $synthesis = trim((string) data_get($response->json(), 'choices.0.message.content', ''));

        if ($synthesis === '') {
            return response()->json([
                'error' => 'Reponse vide du modele Hugging Face.',
            ], 502);
        }

        $cleanSynthesis = $this->sanitizeSynthesis($synthesis);

        $profile = MiniExperienceProfile::create([
            'first_name' => (string) $validated['first_name'],
            'last_name' => (string) ($validated['last_name'] ?? ''),
            'full_name' => (string) $validated['name'],
            'age' => isset($validated['age']) ? (int) $validated['age'] : null,
            'description' => (string) $validated['description'],
            'education_level' => (string) ($validated['education_level'] ?? ''),
            'checked_assertions' => array_values($validated['answers']),
        ]);

        $synthesis = LeadershipSynthesis::create([
            'profile_id' => $profile->id,
            'synthesis_text' => $cleanSynthesis,
            'certificate_token' => Str::random(40),
        ]);

        return response()->json([
            'synthesis' => $cleanSynthesis,
            'assessment_id' => $synthesis->id,
            'certificate_token' => $synthesis->certificate_token,
        ]);
    }

    private function buildPrompt(string $firstName, string $lastName, string $name, string $description, string $educationLevel, array $answers): string
    {
        $models = [
            'Angelique Kidjo -> Influence culturelle, rayonnement international, communication, expression artistique, impact mondial',
            'Tassi Hangbe -> Leadership historique, tradition, autorite naturelle, courage, enracinement culturel',
            'Marie-Elise Gbedo -> Justice, defense des droits humains, engagement citoyen, equite, resolution de conflits',
            'Aurelie Adam Soule -> Innovation numerique, transformation digitale, modernisation des services publics, vision technologique',
            'Claude Borna -> Structuration strategique, transformation institutionnelle, vision long terme, organisation, leadership systemique',
            'Noelie Yarigo -> Discipline, excellence, perseverance, performance, resilience, determination',
        ];

        $lines = [];
        $lines[] = 'Tu es un coach experte en leadership feminin africain.';
        $lines[] = 'Analyse les informations suivantes et redige une synthese personnalisee.';
        $lines[] = '';
        $lines[] = 'Profils de reference (6 modeles) :';

        foreach ($models as $modelLine) {
            $lines[] = '- ' . $modelLine;
        }

        $lines[] = '';
        $lines[] = 'Instructions strategiques :';
        $lines[] = '- Analyse les reponses cochees pour identifier les valeurs dominantes.';
        $lines[] = '- Associe ces valeurs au profil le plus coherent parmi les 6 modeles cites.';
        $lines[] = '- Choisis un seul profil principal parmi les 6 modeles indiques.';
        $lines[] = '- Le profil choisi doit obligatoirement etre l un des 6 modeles cites plus haut.';
        $lines[] = '- Mentionne egalement d autres femmes beninoises evoluant dans le meme domaine.';
        $lines[] = '';
        $lines[] = 'Contraintes obligatoires :';
        $lines[] = '- Ton motivant, positif et concret.';
        $lines[] = '- 350 a 500 mots maximum.';
        $lines[] = '- Reponse structuree en 5 sections avec titres courts en majuscules.';
        $lines[] = '- Texte brut uniquement.';
        $lines[] = '- Ne jamais mentionner IA, modele, algorithme ou machine.';
        $lines[] = '';
        $lines[] = 'Sections attendues :';
        $lines[] = '1) PROFIL DOMINANT :';
        $lines[] = 'Ecris exactement une phrase commencant par : "' . $firstName . ', tu ressembles au leadership de [Nom complet] parce que ...".';
        $lines[] = '- Ne jamais modifier la structure imposee de cette phrase.';
        $lines[] = '';
        $lines[] = '2) POURQUOI CE PROFIL :';
        $lines[] = 'Justifie de maniere concrete en te basant sur la description et les reponses.';
        $lines[] = '';
        $lines[] = '3) ACTIONS IMMEDIATES :';
        $lines[] = 'Donne deux actions precises et applicables cette semaine.';
        $lines[] = '';
        $lines[] = '4) PARCOURS DE FORMATION :';
        $lines[] = "Construis un parcours academique logique et progressif en fonction du niveau actuel de l utilisateur.";
        $lines[] = "Ne jamais proposer un diplome inferieur ou equivalent a son niveau actuel.";
        $lines[] = "Si l utilisateur a deja une Licence, commencer au Master.";
        $lines[] = "Si l utilisateur a deja un Master, commencer directement au Doctorat.";
        $lines[] = "Le parcours doit obligatoirement aller jusqu au Doctorat sauf si l utilisateur refuse.";
        $lines[] = "Pour chaque etape proposee, detailler :";
        $lines[] = "1.Specialisations recommandees";
        $lines[] = "2. Competences a developper";
        $lines[] = "3. Opportunites au Benin ou en Afrique de l Ouest";
        $lines[] = "4. Impact potentiel pour le developpement du Benin";
        $lines[] = "Ne jamais inverser l ordre academique.";
        $lines[] = "IMPORTANT : Identifier le niveau d etude actuel avant de proposer un parcours.";

        $lines[] = "Regles obligatoires :";
        $lines[] = "Si niveau = Lycee: commencer au bac.";
        $lines[] = "Si niveau = Bac : commencer a la Licence.";
        $lines[] = "Si niveau = Licence : commencer au Master.";
        $lines[] = "Si niveau = Master : commencer au Doctorat.";
        $lines[] = "Si niveau = Doctorat : proposer specialisation.";

        $lines[] = "Interdiction absolue de proposer un diplome inferieur au niveau actuel.";
        $lines[] = "Le parcours doit ensuite aller jusqu au Doctorat.";
        $lines[] = "Ne jamais inverser l ordre academique.";

        $lines[] = "Ne pas se baser uniquement sur la description personnelle pour deduire le niveau.";
        $lines[] = "Utiliser uniquement le niveau d etude fourni dans les informations structurees.";


        $lines[] = '';
        $lines[] = '5) PHRASE INSPIRANTE PERSONNALISEE :';
        $lines[] = 'Une phrase forte et memorisable adaptee a la personne.';
        $lines[] = '';
        $lines[] = 'Donnees utilisatrice :';
        $lines[] = 'Prenom : ' . $firstName;
        $lines[] = 'Nom : ' . ($lastName !== '' ? $lastName : 'Non renseigne');
        $lines[] = 'Nom complet : ' . $name;
        $lines[] = 'Description : ' . $description;
        $lines[] = 'Niveau d etude actuel : ' . ($educationLevel !== '' ? $educationLevel : 'Non renseigne');
        $lines[] = 'Reponses cochees :';

        foreach (array_values($answers) as $index => $answer) {
            $lines[] = ($index + 1) . '. ' . (string) $answer;
        }

        return implode("\n", $lines);
    }

    private function sanitizeSynthesis(string $text): string
    {
        return (string) Str::of($text)
            ->replaceMatches('/^\s{0,3}#{1,6}\s*/m', '')
            ->replace('**', '')
            ->replaceMatches('/\n{3,}/', "\n\n")
            ->trim();
    }

    public function certificate(Request $request, LeadershipSynthesis $synthesis)
    {
        $token = (string) $request->query('token', '');
        if ($token === '' || !hash_equals((string) $synthesis->certificate_token, $token)) {
            return response()->json(['error' => 'Acces au certificat refuse.'], 403);
        }

        $certificateData = $this->buildCertificateData($synthesis);
        try {
            $pdf = $this->renderCertificatePdfFromTemplate($certificateData);
        } catch (Throwable $exception) {
            Log::error('Certificate template render failed', [
                'synthesis_id' => $synthesis->id,
                'message' => $exception->getMessage(),
            ]);
            $pdf = $this->buildSimplePdf($this->buildFallbackCertificateLines($certificateData));
        }
        $firstName = preg_replace('/[^A-Za-z0-9_-]+/', '_', Str::ascii((string) ($certificateData['first_name'] ?? 'Internaute')));
        $lastName = preg_replace('/[^A-Za-z0-9_-]+/', '_', Str::ascii((string) ($certificateData['last_name'] ?? '')));
        $firstName = trim((string) $firstName, '_');
        $lastName = trim((string) $lastName, '_');
        $namePart = trim(($lastName !== '' ? $lastName . '_' : '') . $firstName, '_');
        if ($namePart === '') {
            $namePart = 'Internaute';
        }
        $filename = 'Certificat_' . $namePart . '.pdf';

        return response($pdf, 200, [
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'attachment; filename="' . $filename . '"',
            'Cache-Control' => 'no-store, no-cache, must-revalidate',
        ]);
    }

    private function buildCertificateData(LeadershipSynthesis $synthesis): array
    {
        $profile = $synthesis->profile;
        $firstName = $profile ? trim((string) $profile->first_name) : '';
        $lastName = $profile ? trim((string) $profile->last_name) : '';
        if ($firstName === '' && $profile) {
            $firstName = trim((string) Str::of((string) $profile->full_name)->before(' '));
        }
        if ($firstName === '') {
            $firstName = 'Internaute';
        }
        if ($lastName === '' && $profile) {
            $lastName = trim((string) Str::of((string) $profile->full_name)->after(' '));
        }

        $date = optional($synthesis->created_at)->format('d/m/Y') ?: now()->format('d/m/Y');
        $dominantKey = $this->inferDominantProfileKey((string) $synthesis->synthesis_text);
        $meta = $this->getLeadershipMeta($dominantKey);

        return [
            'certificate_name' => 'Certificat Nyonu - Leadership Feminin',
            'first_name' => $firstName,
            'last_name' => $lastName !== '' ? $lastName : 'Non renseigne',
            'leadership_type' => $meta['leadership_text'],
            'leadership_short_type' => $meta['short_type'],
            'badge_label' => $meta['badge_label'],
            'date' => $date,
            'reference' => 'NY-' . str_pad((string) $synthesis->id, 6, '0', STR_PAD_LEFT),
            'logo_data_uri' => $this->getLogoDataUri(),
            'certificate_background_data_uri' => $this->getCertificateBackgroundDataUri(),
        ];
    }

    private function inferDominantProfileKey(string $synthesisText): string
    {
        $text = Str::lower(Str::ascii($synthesisText));
        if (Str::contains($text, 'aurelie')) return 'aurelie';
        if (Str::contains($text, 'kidjo')) return 'kidjo';
        if (Str::contains($text, 'hangbe')) return 'hangbe';
        if (Str::contains($text, 'gbedo')) return 'gbedo';
        if (Str::contains($text, 'yarigo')) return 'yarigo';
        if (Str::contains($text, 'borna')) return 'borna';
        return 'borna';
    }

    private function getLeadershipMeta(string $key): array
    {
        $map = [
            'kidjo' => [
                'short_type' => 'Influence culturelle',
                'badge_label' => 'Badge Influence Culturelle',
                'leadership_text' => 'Leadership d influence culturelle et de rayonnement',
            ],
            'hangbe' => [
                'short_type' => 'Courage strategique',
                'badge_label' => 'Badge Courage Strategique',
                'leadership_text' => 'Leadership de courage, autorite et decision',
            ],
            'gbedo' => [
                'short_type' => 'Justice et dialogue',
                'badge_label' => 'Badge Justice et Dialogue',
                'leadership_text' => 'Leadership de justice sociale et de mediation',
            ],
            'aurelie' => [
                'short_type' => 'Innovation numerique',
                'badge_label' => 'Badge Innovation Numerique',
                'leadership_text' => 'Leadership de modernisation et transformation digitale',
            ],
            'borna' => [
                'short_type' => 'Vision institutionnelle',
                'badge_label' => 'Badge Vision Institutionnelle',
                'leadership_text' => 'Leadership strategique de structuration institutionnelle',
            ],
            'yarigo' => [
                'short_type' => 'Excellence et discipline',
                'badge_label' => 'Badge Excellence et Discipline',
                'leadership_text' => 'Leadership de performance, discipline et resilience',
            ],
        ];

        return $map[$key] ?? $map['borna'];
    }

    private function renderCertificatePdfFromTemplate(array $data): string
    {
        // Dompdf + large background images can exhaust default 128M memory on Windows.
        // Increase memory for this render path so certificate download does not fail with HTTP 500.
        @ini_set('memory_limit', (string) env('CERTIFICATE_PDF_MEMORY_LIMIT', '512M'));
        $dompdfWorkDir = storage_path('app/dompdf');
        $this->ensureDirectory($dompdfWorkDir);
        $options = [
            'defaultFont' => 'DejaVu Sans',
            'isHtml5ParserEnabled' => true,
            'isRemoteEnabled' => false,
            'dpi' => 96,
            'fontDir' => $dompdfWorkDir,
            'fontCache' => $dompdfWorkDir,
            'tempDir' => $dompdfWorkDir,
            'chroot' => public_path(),
        ];

        if (class_exists(\Barryvdh\DomPDF\Facade\Pdf::class)) {
            /** @var \Barryvdh\DomPDF\PDF $pdf */
            $pdf = \Barryvdh\DomPDF\Facade\Pdf::setOptions($options)
                ->loadView('certificates.leadership', $data)
                ->setPaper('a4', 'portrait');
            return $pdf->output();
        }

        if (app()->bound('dompdf.wrapper')) {
            $pdf = app('dompdf.wrapper');
            $pdf->setOptions($options);
            $pdf->loadView('certificates.leadership', $data);
            $pdf->setPaper('a4', 'portrait');
            return $pdf->output();
        }

        throw new RuntimeException('Dompdf n est pas disponible pour rendre le template certificat.');
    }

    private function ensureDirectory(string $path): void
    {
        if (is_dir($path)) {
            return;
        }

        @mkdir($path, 0775, true);
    }

    private function getLogoDataUri(): ?string
    {
        $logoPath = public_path('images/Nyonu-Logo.png');
        if (!is_file($logoPath)) {
            return null;
        }

        $contents = @file_get_contents($logoPath);
        if ($contents === false) {
            return null;
        }

        return 'data:image/png;base64,' . base64_encode($contents);
    }

    private function getCertificateBackgroundDataUri(): ?string
    {
        $backgroundCandidates = [
            public_path('images/Certificat.jpg'),
        ];
        $backgroundPath = null;
        foreach ($backgroundCandidates as $candidate) {
            if (is_file($candidate)) {
                $backgroundPath = $candidate;
                break;
            }
        }
        if ($backgroundPath === null) {
            return null;
        }

        $contents = @file_get_contents($backgroundPath);

        if ($contents === false) {
            return null;
        }

        $extension = strtolower((string) pathinfo($backgroundPath, PATHINFO_EXTENSION));
        $mime = 'application/octet-stream';
        if ($extension === 'jpg' || $extension === 'jpeg') {
            $mime = 'image/jpeg';
        } elseif ($extension === 'png') {
            $mime = 'image/png';
        }

        return 'data:' . $mime . ';base64,' . base64_encode($contents);
    }

    private function buildFallbackCertificateLines(array $data): array
    {
        return [
            'NYONU (LOGO SITE)',
            '',
            'CERTIFICAT OFFICIEL DE LEADERSHIP',
            '',
            'Nom du certificat: ' . Str::ascii((string) $data['certificate_name']),
            '',
            'Prenom: ' . Str::ascii((string) $data['first_name']),
            'Nom: ' . Str::ascii((string) $data['last_name']),
            'Type de leadership: ' . Str::ascii((string) $data['leadership_type']),
            'Badge: ' . Str::ascii((string) $data['badge_label']),
            'Date: ' . Str::ascii((string) $data['date']),
            'Reference: ' . Str::ascii((string) $data['reference']),
            '',
            'Ce certificat atteste que la personne ci-dessus incarne',
            'un leadership de type "' . Str::ascii((string) $data['leadership_short_type']) . '"',
            'selon le parcours Mini Experience Nyonu.',
        ];
    }

    private function buildSimplePdf(array $lines): string
    {
        $streamLines = [];
        $y = 800;
        foreach ($lines as $line) {
            $safe = str_replace(['\\', '(', ')'], ['\\\\', '\\(', '\\)'], (string) $line);
            $streamLines[] = "1 0 0 1 50 {$y} Tm ({$safe}) Tj";
            $y -= 18;
            if ($y < 50) {
                break;
            }
        }

        $stream = "BT\n/F1 12 Tf\n" . implode("\n", $streamLines) . "\nET";

        $objects = [];
        $objects[1] = "<< /Type /Catalog /Pages 2 0 R >>";
        $objects[2] = "<< /Type /Pages /Kids [3 0 R] /Count 1 >>";
        $objects[3] = "<< /Type /Page /Parent 2 0 R /MediaBox [0 0 595 842] /Resources << /Font << /F1 4 0 R >> >> /Contents 5 0 R >>";
        $objects[4] = "<< /Type /Font /Subtype /Type1 /BaseFont /Helvetica >>";
        $objects[5] = "<< /Length " . strlen($stream) . " >>\nstream\n" . $stream . "\nendstream";

        $pdf = "%PDF-1.4\n";
        $offsets = [0];
        $count = count($objects);

        for ($i = 1; $i <= $count; $i++) {
            $offsets[$i] = strlen($pdf);
            $pdf .= $i . " 0 obj\n" . $objects[$i] . "\nendobj\n";
        }

        $xrefPosition = strlen($pdf);
        $pdf .= "xref\n0 " . ($count + 1) . "\n";
        $pdf .= "0000000000 65535 f \n";
        for ($i = 1; $i <= $count; $i++) {
            $pdf .= sprintf("%010d 00000 n \n", $offsets[$i]);
        }

        $pdf .= "trailer\n<< /Size " . ($count + 1) . " /Root 1 0 R >>\n";
        $pdf .= "startxref\n" . $xrefPosition . "\n%%EOF";

        return $pdf;
    }
}
