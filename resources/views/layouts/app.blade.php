<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Nyɔnu')</title>
    <link rel="preload" as="image" href="{{ asset('images/Background1.png') }}" fetchpriority="high">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="shortcut icon" href="{{ asset('images/nyonu_fav.ico') }}">


</head>
<body  class="bg-white text-black font-[Chillax] text-lg tracking-[-0.03em]">

    {{-- Header --}}
   <header id="main-header" 
  class="relative top-0 left-0 w-full flex justify-between items-center 
         px-6 sm:px-10 lg:px-20 py-10 bg-white/90 backdrop-blur-md z-50 
         transition-all duration-300 shadow-none 
         border-b border-gray-200">

        <div class="flex items-center space-x-3">
            <img src="{{ asset('images/Nyonu-Logo.png') }}" alt="Nyɔnu logo" class="w-auto h-12 sm:h-14 lg:h-16">
        </div>
            <nav class="hidden lg:flex space-x-6 text-xl items-center">
                <a href="#leadership" class="text-black hover:text-[#ba06bf]">Le concept</a>
                <a href="#valeurs" class="text-black hover:text-[#ba06bf]"> Nos valeurs</a>
                <a href="#femmes" class="text-black hover:text-[#ba06bf]">Figures inspirantes</a>
                <a href="#parcours" class="inline-flex items-center bg-[#ba06bf] text-white px-5 py-2 rounded-full hover:bg-[#760e79] transition">
                     Commencer mon parcours
                </a>
            </nav>
        <button id="mobile-menu-button" class="lg:hidden inline-flex items-center justify-center w-11 h-11 rounded-full border border-gray-200 hover:border-[#ba06bf] transition" aria-label="Ouvrir le menu" aria-expanded="false" aria-controls="mobile-menu">
            <i data-lucide="menu" class="w-6 h-6 text-black"></i>
        </button>
    </header>

    <nav id="mobile-menu" class="lg:hidden hidden px-6 sm:px-10 pb-6 border-b border-gray-200 bg-white text-lg">
        <div class="flex flex-col gap-3 pt-4">
            <a href="#leadership" class="text-black hover:text-[#ba06bf]">Le concept</a>
            <a href="#valeurs" class="text-black hover:text-[#ba06bf]"> Nos valeurs</a>
            <a href="#femmes" class="text-black hover:text-[#ba06bf]">Figures inspirantes</a>
            <a href="#parcours" class="inline-flex items-center justify-center bg-[#ba06bf] text-white px-4 py-2 rounded-full hover:bg-[#760e79] transition text-base w-fit">
                 Commencer mon parcours
            </a>
        </div>
    </nav>

    {{-- Contenu principal --}}
    <main>
        @yield('content')
    </main>

    {{-- Footer --}}
    <footer class="bg-[#000000] pt-16 pb-8">
        <div class="max-w-7xl mx-auto px-8 grid grid-cols-1 md:grid-cols-3 gap-12">

            <!-- Logo + description -->
            <div>
            <div class="flex items-center gap-2 mb-4">
                 <img src="{{ asset('images/Nyonu-Logo-white.png') }}" alt="Nyɔnu logo" class="w-auto h-16">
            </div>
            <p class="text-white mb-6">
              Nyɔnu t’accompagne pas à pas pour révéler ton potentiel et construire un parcours qui te ressemble.
            </p>
            <div class="flex gap-3">
                <a href="https://www.facebook.com/stecy.lahitan.50" class="w-10 h-10 bg-[#474747] text-white rounded-full flex items-center justify-center hover:bg-[#ba06bf] hover:text-white transition"><i data-lucide="facebook"></i></a>            
                <a href="https://www.linkedin.com/in/st%C3%A9cy-lahitan-41580826b/" class="w-10 h-10 bg-[#474747] text-white rounded-full flex items-center justify-center hover:bg-[#ba06bf] hover:text-white transition"><i data-lucide="linkedin"></i></a>
                <a href="https://www.instagram.com/stecy_lah/" class="w-10 h-10 bg-[#474747] text-white rounded-full flex items-center justify-center hover:bg-[#ba06bf] hover:text-white transition"><i data-lucide="instagram"></i></a>
            </div>
            </div>

            <!-- Liens -->
            <div>
            <h3 class="text-2xl font-semibold text-[#ba06bf] mb-4">Liens</h3>
            <ul class="space-y-3 text-white">
                <li><a href="#leadership" class="text-white hover:text-[#ba06bf]">Le concept</a></li>
                <li><a href="#valeurs" class="text-white hover:text-[#ba06bf]"> Nos valeurs</a></li>
                <li><a href="#femmes" class="text-white hover:text-[#ba06bf]">Figures inspirantes</a></li>
                <li><a href="#parcours" class="text-white hover:text-[#ba06bf]">Commencer mon parcours</a></li>
            </ul>
            </div>

            <!-- Contact -->
            <div>
            <h3 class="text-2xl font-semibold text-[#ba06bf] mb-4">Contact</h3>
            <p class="text-white mb-2">+229 01 69 38 45 41</p>
            <p class="text-white mb-2">lahitanstecy@gmail.com</p>   
            </div>
        </div>

        <!-- Bas du footer -->
        <div class="border-t border-gray-200 mt-12 pt-6 text-center text-gray-500 text-lg">
           <p>Design & Développement réalisés par <span class="text-white font-medium">Stécy LAHITAN</span> — © 2025 <span class="text-white font-medium">Nyɔnu</span>.</p>
        </div>
    </footer>

    <button
        id="back-to-top"
        type="button"
        aria-label="Retour en haut"
        class="fixed bottom-6 right-6 z-50 inline-flex items-center justify-center w-12 h-12 rounded-full bg-[#ba06bf] text-white shadow-lg hover:bg-[#760e79] transition"
    >
        <i data-lucide="arrow-up" class="w-5 h-5"></i>
    </button>

    
{{-- Script pour les icônes Lucide --}}
<script src="https://unpkg.com/lucide@latest"></script>
<script>
    if (window.lucide && typeof window.lucide.createIcons === "function") {
        window.lucide.createIcons();
    }

    // Bouton retour en haut
    const backToTopButton = document.getElementById("back-to-top");
    if (backToTopButton) {
        backToTopButton.addEventListener("click", function () {
            window.scrollTo({ top: 0, behavior: "smooth" });
        });
    }

    // Ombre du header au scroll
    window.addEventListener("scroll", function () {
        const header = document.getElementById("main-header");
        if (window.scrollY > 10) {
            header.classList.add("shadow-md", "bg-white");
        } else {
            header.classList.remove("shadow-md");
        }
    });

    // Scroll smooth ancres
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({ behavior: 'smooth', block: 'start' });
            }
        });
    });

    // Menu mobile
    const menuButton = document.getElementById("mobile-menu-button");
    const mobileMenu = document.getElementById("mobile-menu");
    if (menuButton && mobileMenu) {
        menuButton.addEventListener("click", function () {
            const isHidden = mobileMenu.classList.contains("hidden");
            mobileMenu.classList.toggle("hidden");
            menuButton.setAttribute("aria-expanded", isHidden ? "true" : "false");
        });

        mobileMenu.querySelectorAll('a[href^="#"]').forEach(link => {
            link.addEventListener("click", function () {
                mobileMenu.classList.add("hidden");
                menuButton.setAttribute("aria-expanded", "false");
            });
        });
    }

    // Démarrer l'expérience (ouvrir le mini quiz)
    const startExperience = document.getElementById("start-experience");
    const experiencePanel = document.getElementById("experience");
    if (startExperience && experiencePanel) {
        startExperience.addEventListener("click", function () {
            experiencePanel.classList.remove("hidden");
        });
    }

    // Mini quiz IA (afficher un résultat)
    const quizReset = document.getElementById("quiz-reset");
    const quizResult = document.getElementById("quiz-result");
    const quizResultText = document.getElementById("quiz-result-text");
    const quizName = document.getElementById("quiz-name");
    const quizFirstname = document.getElementById("quiz-firstname");
    const quizLastname = document.getElementById("quiz-lastname");
    const quizAge = document.getElementById("quiz-age");
    const quizEducation = document.getElementById("quiz-education");
    const quizDesc = document.getElementById("quiz-desc");
    const quizChoices = document.getElementById("quiz-choices");
    const quizStep1 = document.getElementById("quiz-step-1");
    const quizStep2 = document.getElementById("quiz-step-2");
    const quizStep3 = document.getElementById("quiz-step-3");
    const quizProgressBar = document.getElementById("quiz-progress-bar");
    const quizProgressStep = document.getElementById("quiz-progress-step");
    const quizProgressLabel = document.getElementById("quiz-progress-label");
    const quizNext1 = document.getElementById("quiz-next-1");
    const quizNext2 = document.getElementById("quiz-next-2");
    const quizPrev2 = document.getElementById("quiz-prev-2");
    const quizPrev3 = document.getElementById("quiz-prev-3");
    const badgeEvaluationSection = document.getElementById("badge-evaluation");
    if (quizResult && quizResultText && quizChoices) {
        function showBadgeEvaluation() {
            if (!badgeEvaluationSection) return;
            badgeEvaluationSection.classList.remove("hidden");
        }

        function hideBadgeEvaluation() {
            if (!badgeEvaluationSection) return;
            badgeEvaluationSection.classList.add("hidden");
        }

        function setResultText(value) {
            if ("value" in quizResultText) {
                quizResultText.value = value;
                return;
            }
            quizResultText.textContent = value;
        }

        function setResultHtml(value) {
            if ("value" in quizResultText) {
                quizResultText.value = value;
                return;
            }
            quizResultText.innerHTML = value;
        }

        function escapeHtml(value) {
            return String(value)
                .replace(/&/g, "&amp;")
                .replace(/</g, "&lt;")
                .replace(/>/g, "&gt;")
                .replace(/"/g, "&quot;")
                .replace(/'/g, "&#39;");
        }

        function normalizeApiUrl(value, fallbackPath) {
            const raw = (value || "").toString().trim();
            const safeFallback = fallbackPath || "/api/leadership/synthesis";
            if (!raw) return safeFallback;
            if (raw.startsWith("/")) return raw;

            try {
                const parsed = new URL(raw, window.location.origin);
                // Prevent mixed-content calls in production when an http URL is injected.
                if (window.location.protocol === "https:" && parsed.protocol === "http:") {
                    parsed.protocol = "https:";
                }
                if (parsed.origin === window.location.origin) {
                    return `${parsed.pathname}${parsed.search}${parsed.hash}`;
                }
                return parsed.toString();
            } catch (e) {
                return safeFallback;
            }
        }

        const LEADERSHIP_API_URL = normalizeApiUrl(window.LEADERSHIP_API_URL, "/api/leadership/synthesis");
        const LEADERSHIP_CERTIFICATE_BASE = normalizeApiUrl(window.LEADERSHIP_CERTIFICATE_BASE, "/api/leadership/synthesis");
        window.LEADERSHIP_API_URL = LEADERSHIP_API_URL;
        window.LEADERSHIP_CERTIFICATE_BASE = LEADERSHIP_CERTIFICATE_BASE;
        const submitDefaultText = quizNext2 ? quizNext2.textContent.trim() : "Soumettre";
        let lastGeneratedSignature = null;

        const profiles = {
            kidjo: {
                name: "Angélique Kidjo",
                why: "tu fais vibrer les cœurs par la culture, tu transmets avec feu et tu ouvres des chemins par ta voix."
            },
            hangbe: {
                name: "Tassi Hangbé",
                why: "tu avances avec audace, tu décides avec lucidité et tu guides même quand la route est exigeante."
            },
            gbedo: {
                name: "Marie-Élise Gbèdo",
                why: "tu portes la justice, tu apaises les conflits et tu défends le dialogue avec force et dignité."
            },
            aurelie: {
                name: "Aurélie Adam Soulé",
                why: "tu transformes les systèmes, tu modernises avec vision et tu rends les solutions accessibles à toutes."
            },
            borna: {
                name: "Claude Borna",
                why: "tu structures l’action, tu fais grandir les projets et tu crées de la valeur durable."
            },
            yarigo: {
                name: "Noëlie Yarigo",
                why: "tu avances avec discipline, tu tiens le cap et tu inspires par l’excellence."
            }
        };

        function setSubmitLoading(isLoading) {
            if (!quizNext2) return;
            quizNext2.disabled = isLoading;
            quizNext2.textContent = isLoading ? "Génération en cours..." : submitDefaultText;
            quizNext2.classList.toggle("opacity-70", isLoading);
            quizNext2.classList.toggle("cursor-not-allowed", isLoading);
        }

        function getCheckedAnswers(choicesContainer) {
            const checkedChoices = choicesContainer.querySelectorAll('input[type="checkbox"][data-profile]:checked');
            return Array.from(checkedChoices)
                .map((choice) => {
                    const labelText = choice.closest("label")?.querySelector("span");
                    return labelText ? labelText.textContent.trim() : "";
                })
                .filter(Boolean);
        }

        function calculateScores(choicesContainer) {
            const scores = Object.fromEntries(Object.keys(profiles).map((key) => [key, 0]));
            const checkedChoices = choicesContainer.querySelectorAll('input[type="checkbox"][data-profile]:checked');

            checkedChoices.forEach((choice) => {
                const key = choice.dataset.profile;
                if (Object.prototype.hasOwnProperty.call(scores, key)) {
                    scores[key] += 1;
                }
            });

            return scores;
        }

        function getBestProfile(scores) {
            let maxScore = -Infinity;
            const tiedProfiles = [];

            Object.entries(scores).forEach(([key, value]) => {
                if (value > maxScore) {
                    maxScore = value;
                    tiedProfiles.length = 0;
                    tiedProfiles.push(key);
                    return;
                }

                if (value === maxScore) {
                    tiedProfiles.push(key);
                }
            });

            if (tiedProfiles.length === 0) return null;
            return tiedProfiles[Math.floor(Math.random() * tiedProfiles.length)];
        }

        function generateResultText(name, profileData) {
            const safeName = name && name.trim() ? name.trim() : "Ton profil";
            if (!profileData) {
                return `${safeName} montre un leadership en construction. Continue à t’affirmer: ta voix compte.`;
            }

            return `${safeName} se rapproche de celui de ${profileData.name}: ${profileData.why}`;
        }

        function formatSynthesisForDisplay(rawText) {
            if (!rawText) return "";

            const normalizedText = rawText
                // Retire un éventuel numéro devant "Profil dominant".
                .replace(/(^|\n)\s*\d+[.)]?\s*(PROFIL DOMINANT)\s*:?\s*/gi, "$1__SECTION__$2:__\n")
                // Nettoie les marqueurs markdown fréquents.
                .replace(/^\s{0,3}#{1,6}\s*/gm, "")
                .replace(/\*\*(.*?)\*\*/g, "$1")
                .replace(/\*(.*?)\*/g, "$1")
                // Ajoute des séparations lisibles entre sections typiques.
                .replace(/\s*(PROFIL DOMINANT)\s*:?\s*/gi, "\n\n__SECTION__$1:__\n")
                .replace(/\s*(POURQUOI CE PROFIL)\s*:?\s*/gi, "\n\n__SECTION__$1:__\n")
                .replace(/\s*(ACTIONS IMM[ÉE]DIATES?)\s*:?\s*/gi, "\n\n__SECTION__$1:__\n")
                .replace(/\s*(PARCOURS DE FORMATION)\s*:?\s*/gi, "\n\n__SECTION__$1:__\n")
                .replace(/\s*(PHRASE INSPIRANTE PERSONNALIS[ÉE]E)\s*:?\s*/gi, "\n\n__SECTION__$1:__\n")
                // Remplace les listes numérotées par des puces simples.
                .replace(/\s\d+[.)]\s+/g, "\n- ")
                .replace(/\s-\s+/g, "\n- ")
                // Marque les niveaux académiques à mettre en gras.
                .replace(/\b(Bac|Licence|Master|Doctorat)\b/giu, "__BOLD__$1__")
                // Empêche les puces devant les marqueurs en gras.
                .replace(/(^|\n)-\s*(__SECTION__|__BOLD__)/g, "$1$2")
                // Normalise les lignes vides pour un rendu plus lisible.
                .replace(/\r\n/g, "\n")
                .replace(/\n{3,}/g, "\n\n")
                .trim();

            return escapeHtml(normalizedText)
                .replace(/__SECTION__(.*?):__/g, "<strong>$1:</strong>")
                .replace(/__BOLD__(.*?)__/g, "<strong>$1</strong>")
                .replace(/\n/g, "<br>");
        }

        function getQuizContext() {
            const legacyName = quizName ? quizName.value.trim() : "";
            const firstname = quizFirstname ? quizFirstname.value.trim() : "";
            const lastname = quizLastname ? quizLastname.value.trim() : "";
            const age = quizAge ? quizAge.value.trim() : "";
            const education = quizEducation ? quizEducation.value.trim() : "";
            const educationLabel = quizEducation && quizEducation.selectedIndex >= 0
                ? quizEducation.options[quizEducation.selectedIndex].text
                : "";
            const name = `${firstname} ${lastname}`.trim() || legacyName;
            const descriptionBase = quizDesc ? quizDesc.value.trim() : "";
            const extraDetails = [
                age ? `Âge: ${age}` : "",
                education ? `Niveau d'étude: ${educationLabel}` : ""
            ].filter(Boolean).join(" | ");
            const description = [descriptionBase, extraDetails].filter(Boolean).join("\n");
            const answers = getCheckedAnswers(quizChoices);
            const signature = JSON.stringify({
                firstname,
                lastname,
                age,
                education,
                descriptionBase,
                answers
            });

            return {
                firstname,
                lastname,
                age,
                name,
                description,
                education,
                educationLabel,
                answers,
                signature
            };
        }

        const quizSteps = [quizStep1, quizStep2, quizStep3].filter(Boolean);

        function showQuizStep(index) {
            if (quizSteps.length === 0) return;
            const safeIndex = Math.max(0, Math.min(index, quizSteps.length - 1));
            quizSteps.forEach((step, currentIndex) => {
                step.classList.toggle("hidden", currentIndex !== safeIndex);
            });

            const stepNumber = safeIndex + 1;
            const progressPercent = (stepNumber / quizSteps.length) * 100;
            if (quizProgressBar) quizProgressBar.style.width = `${progressPercent}%`;
            if (quizProgressStep) quizProgressStep.textContent = `${stepNumber}/${quizSteps.length}`;
            if (quizProgressLabel) {
                const labels = ["Informations personnelles", "Affirmations", "Synthèse"];
                quizProgressLabel.textContent = labels[safeIndex] || "Progression";
            }
        }

        if (quizNext1) {
            quizNext1.addEventListener("click", function () {
                showQuizStep(1);
            });
        }

        if (quizPrev2) {
            quizPrev2.addEventListener("click", function () {
                showQuizStep(0);
            });
        }

        if (quizPrev3) {
            quizPrev3.addEventListener("click", function () {
                showQuizStep(1);
            });
        }

        if (startExperience) {
            startExperience.addEventListener("click", function () {
                showQuizStep(0);
            });
        }

        showQuizStep(0);

       async function submitLeadershipSynthesis() {
        const quizContext = getQuizContext();
        const { firstname, lastname, age, name, description, education, educationLabel, answers, signature } = quizContext;
    
        if (!firstname || !name || !description || !education || answers.length === 0) {
            setResultText("Merci de renseigner ton prénom et ton nom, ton niveau d'étude, au moins une information de profil et de cocher au moins une réponse.");
            quizResult.classList.remove("hidden");
            return;
        }
    
        setSubmitLoading(true);
        quizResult.classList.remove("hidden");
        setResultText("Génération en cours...");
    
        try {
            const response = await fetch(LEADERSHIP_API_URL, {
                method: "POST",
                headers: { "Content-Type": "application/json" },
                body: JSON.stringify({
                    first_name: firstname,
                    last_name: lastname,
                    age,
                    name,
                    description,
                    education_level: educationLabel,
                    answers
                })
            });


                const data = await response.json().catch(() => ({}));
                if (!response.ok) {
                    const serverMessage = [data.error, data.details].filter(Boolean).join(" - ");
                    throw new Error(serverMessage || "Erreur serveur pendant la génération.");
                }

                const synthesis = typeof data.synthesis === "string" ? data.synthesis.trim() : "";
                if (!synthesis) {
                    throw new Error("La synthèse reçue est vide.");
                }

                setResultHtml(formatSynthesisForDisplay(synthesis));
                window.LAST_LEADERSHIP_ASSESSMENT = {
                    id: data.assessment_id || null,
                    certificate_token: data.certificate_token || "",
                };
                if (window.LAST_LEADERSHIP_ASSESSMENT.id && window.LAST_LEADERSHIP_ASSESSMENT.certificate_token) {
                    showBadgeEvaluation();
                }
                lastGeneratedSignature = signature;
            } catch (error) {
                // Fallback local pour ne jamais bloquer l'utilisatrice.
                const scores = calculateScores(quizChoices);
                const bestKey = getBestProfile(scores) || "kidjo";
                const profileData = profiles[bestKey] || null;
                const fallbackSummary = generateResultText(name, profileData);
                const technicalMessage = error && error.message ? error.message : "";
                const networkHint = technicalMessage === "Failed to fetch"
                    ? ` URL: ${LEADERSHIP_API_URL} | Origine: ${window.location.origin} | En ligne: ${navigator.onLine ? "oui" : "non"}`
                    : "";
                const technicalReason = technicalMessage ? ` Détail: ${technicalMessage}${networkHint}` : "";

                setResultHtml(formatSynthesisForDisplay(`${fallbackSummary}\n\n(Mode hors ligne: le service de synthèse est temporairement indisponible.${technicalReason})`));
                lastGeneratedSignature = signature;
            } finally {
                setSubmitLoading(false);
                quizResult.classList.remove("hidden");
            }
        }

        if (quizNext2) {
            quizNext2.addEventListener("click", async function () {
                showQuizStep(2);
                const currentSignature = getQuizContext().signature;
                if (lastGeneratedSignature && currentSignature === lastGeneratedSignature) {
                    quizResult.classList.remove("hidden");
                    const persisted = window.LAST_LEADERSHIP_ASSESSMENT || null;
                    if (persisted && persisted.id && persisted.certificate_token) {
                        showBadgeEvaluation();
                    }
                    return;
                }
                await submitLeadershipSynthesis();
            });
        }

        if (quizReset) {
            quizReset.addEventListener("click", function () {
                setSubmitLoading(false);
                if (quizName) quizName.value = "";
                if (quizFirstname) quizFirstname.value = "";
                if (quizLastname) quizLastname.value = "";
                if (quizAge) quizAge.value = "";
                if (quizEducation) quizEducation.value = "";
                if (quizDesc) quizDesc.value = "";
                quizChoices.querySelectorAll('input[type="checkbox"]').forEach((cb) => {
                    cb.checked = false;
                });
                if (quizResult) quizResult.classList.add("hidden");
                if (quizResultText) setResultText("");
                window.LAST_LEADERSHIP_ASSESSMENT = null;
                hideBadgeEvaluation();
                lastGeneratedSignature = null;
                showQuizStep(0);
            });
        }
    }
</script>


</body>
</html>
