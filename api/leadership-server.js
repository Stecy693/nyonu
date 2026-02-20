const express = require("express");
const cors = require("cors");
const dotenv = require("dotenv");

dotenv.config();

const app = express();
const port = process.env.LEADERSHIP_API_PORT || 8787;
const hfApiKey = process.env.HUGGINGFACE_API_KEY || "";
const hfModel = process.env.HUGGINGFACE_MODEL || "Qwen/Qwen2.5-7B-Instruct";
const hfRouterBase = process.env.HUGGINGFACE_ROUTER_BASE || "https://router.huggingface.co/v1/chat/completions";
const hfUrl = hfRouterBase.replace(/\/+$/, "");

app.use(cors());
app.use(express.json({ limit: "1mb" }));

function hasUsableHfKey() {
    return Boolean(hfApiKey && hfApiKey.trim() && hfApiKey.trim() !== "ta_cle_huggingface");
}

const leadershipModels = [
    "Angelique Kidjo -> Culture & influence mondiale",
    "Tassi Hangbe -> Leadership historique & traditionnel",
    "Marie-Elise Gbedo -> Justice & droits humains",
    "Aurelie Adam Soule -> Numerique & innovation publique",
    "Claude Borna -> Structuration strategique & transformation",
    "Noelie Yarigo -> Discipline & excellence sportive"
];

function normalizePayload(body) {
    const name = typeof body?.name === "string" ? body.name.trim() : "";
    const description = typeof body?.description === "string" ? body.description.trim() : "";
    const answers = Array.isArray(body?.answers)
        ? body.answers
            .filter((item) => typeof item === "string")
            .map((item) => item.trim())
            .filter(Boolean)
        : [];

    return { name, description, answers };
}

function validatePayload({ name, description, answers }) {
    if (!name) return "Le champ 'name' est requis.";
    if (!description) return "Le champ 'description' est requis.";
    if (!answers.length) return "Le champ 'answers' doit contenir au moins une reponse.";
    if (answers.length > 30) return "Le champ 'answers' contient trop d'elements.";
    return null;
}

function buildPrompt({ name, description, answers }) {
    return [
        "Tu es un coach en leadership feminin francophone.",
        "Redige une synthese personnalisee a partir des informations suivantes.",
        "",
        "Profils de reference (6 modeles):",
        ...leadershipModels.map((line) => `- ${line}`),
        "",
        "Contraintes obligatoires:",
        "- Ton motivant, positif et concret.",
        "- 250 a 350 mots maximum.",
        "- Reponse structuree en 5 sections avec titres courts.",
        "- Texte brut uniquement: pas de Markdown (#, ##, ###, **, *).",
        "- Ne jamais mentionner IA, modele, algorithme, machine.",
        "",
        "Sections attendues:",
        "1) Profil dominant (nom + axe principal).",
        "2) Pourquoi ce profil correspond.",
        "3) Deux conseils pratiques applicables cette semaine.",
        "4) Un parcours d'etudes/formation adapte au Benin ou a l'Afrique.",
        "5) Une phrase inspirante personnalisee.",
        "",
        "Donnees utilisatrice:",
        `Nom: ${name}`,
        `Description: ${description}`,
        "Reponses cochees:",
        ...answers.map((answer, index) => `${index + 1}. ${answer}`)
    ].join("\n");
}

function extractGeneratedText(hfResponseData) {
    const content = hfResponseData?.choices?.[0]?.message?.content;
    if (typeof content === "string") return content.trim();
    return "";
}

async function generateWithHuggingFace(prompt) {
    const response = await fetch(hfUrl, {
        method: "POST",
        headers: {
            Authorization: `Bearer ${hfApiKey}`,
            "Content-Type": "application/json"
        },
        body: JSON.stringify({
            model: hfModel,
            messages: [
                {
                    role: "system",
                    content: "Tu rediges uniquement en francais, avec un ton motivant et une structure claire. Ecris en texte brut, sans Markdown, sans titres avec # et sans **."
                },
                {
                    role: "user",
                    content: prompt
                }
            ],
            temperature: 0.7,
            max_tokens: 700
        })
    });

    const data = await response.json().catch(() => ({}));
    if (!response.ok) {
        const errorMessage = data?.error || data?.message || `Hugging Face HTTP ${response.status}`;
        const error = new Error(errorMessage);
        error.status = response.status;
        throw error;
    }

    if (data?.error) {
        const error = new Error(data.error);
        error.status = 502;
        throw error;
    }

    const text = extractGeneratedText(data);
    if (!text) {
        const error = new Error("Reponse vide du modele Hugging Face (format chat).");
        error.status = 502;
        throw error;
    }

    return text;
}

app.get("/", (req, res) => {
    res.json({
        ok: true,
        service: "leadership-api",
        provider: "huggingface",
        model: hfModel,
        endpoints: {
            synthesis: "POST /api/leadership/synthesis",
            health: "GET /health",
            testHf: "GET /test-hf"
        }
    });
});

app.get("/health", (req, res) => {
    res.json({ ok: true });
});

app.get("/test-hf", async (req, res) => {
    if (!hasUsableHfKey()) {
        return res.status(500).json({
            error: "HUGGINGFACE_API_KEY absente ou invalide dans .env"
        });
    }

    try {
        const message = await generateWithHuggingFace("Dis bonjour en francais en une phrase.");
        return res.json({ ok: true, message });
    } catch (error) {
        console.error("[test-hf] HuggingFace error:", {
            status: error?.status,
            message: error?.message
        });
        return res.status(error?.status || 500).json({
            error: "Echec du test Hugging Face.",
            details: error?.message || "Erreur inconnue."
        });
    }
});

app.get("/test-openai", async (req, res) => {
    return res.status(410).json({
        error: "Endpoint migre vers Hugging Face.",
        use: "GET /test-hf"
    });
});

app.post("/api/leadership/synthesis", async (req, res) => {
    if (!hasUsableHfKey()) {
        return res.status(500).json({
            error: "HUGGINGFACE_API_KEY est manquante ou invalide dans les variables d'environnement."
        });
    }

    const payload = normalizePayload(req.body);
    const validationError = validatePayload(payload);
    if (validationError) {
        return res.status(400).json({ error: validationError });
    }

    try {
        const prompt = buildPrompt(payload);
        const synthesis = await generateWithHuggingFace(prompt);
        return res.json({ synthesis });
    } catch (error) {
        console.error("[leadership-synthesis] HuggingFace error:", {
            status: error?.status,
            message: error?.message
        });
        return res.status(error?.status || 500).json({
            error: "Impossible de generer la synthese.",
            details: error?.message || "Erreur inconnue."
        });
    }
});

app.listen(port, () => {
    console.log(`Leadership API active sur http://localhost:${port}`);
    console.log(`Provider: Hugging Face (${hfModel})`);
});
