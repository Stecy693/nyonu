@extends('layouts.auth')

@section('title', "Créer un compte – SkillMatchr")

@section('content')

<section class="relative min-h-screen flex items-center justify-center bg-white px-20 py-20 h-[140vh] pt-28">

    <!-- BACKGROUND : FORMES GÉOMÉTRIQUES -->
        <div class="absolute inset-0 pointer-events-none z-0">

            <!-- Cercle -->
            <div class="absolute w-16 h-16 border-[3px] border-blue-300 rounded-full top-10 left-20 opacity-70"></div>

            <!-- Petit cercle -->
            <div class="absolute w-8 h-8 border-[3px] border-yellow-400 rounded-full top-[10%] right-[11%] opacity-70"></div>

            <!-- Hexagone -->
            <div class="absolute w-14 h-14 border-[3px] border-purple-400 top-[30%] left-[5%] rotate-45 opacity-70"></div>

            <!-- Cercle large -->
            <div class="absolute w-24 h-24 border-[3px] border-green-400 rounded-full bottom-[28%] right-[1%] opacity-60"></div>

            <!-- Triangle CSS -->
            <div class="absolute top-[55%] left-[50%] border-l-[25px] border-l-transparent border-r-[25px] border-r-transparent border-b-[45px] border-b-blue-300 opacity-60"></div>

            <!-- Petit carré -->
            <div class="absolute w-10 h-10 border-[3px] border-yellow-400 top-[70%] left-[22%] rotate-[15deg] opacity-60"></div>

            <!-- Cercle fin -->
            <div class="absolute w-20 h-20 border-[2px] border-indigo-300 rounded-full top-[12%] right-[30%] opacity-50"></div>

            <!-- Hexagone 2 -->
            <div class="absolute w-12 h-12 border-[3px] border-pink-400 bottom-[12%] right-[50%] rotate-12 opacity-60"></div>

            <!-- Triangle inversé -->
            <div class="absolute bottom-[38%] left-[25%] border-l-[20px] border-l-transparent border-r-[20px] border-r-transparent border-t-[40px] border-t-orange-300 opacity-60"></div>

            <!-- Cercle centre haut -->
            <div class="absolute w-10 h-10 border-[3px] border-teal-400 rounded-full top-[30%] left-[50%] opacity-60"></div>

            <!-- Rectangle -->
            <div class="absolute w-12 h-6 border-[3px] border-gray-400 rotate-[35deg] top-[48%] right-[42%] opacity-60"></div>

            <!-- Cercle tout petit -->
            <div class="absolute w-6 h-6 border-[2px] border-blue-200 rounded-full bottom-[25%] left-[12%] opacity-60"></div>

            <!-- Hexagone fin -->
            <div class="absolute w-16 h-16 border-[2px] border-emerald-300 top-[32%] right-[12%] rotate-[25deg] opacity-60"></div>

            <!-- Cercle haut gauche -->
            <div class="absolute w-14 h-14 border-[3px] border-cyan-300 rounded-full top-[18%] left-[28%] opacity-60"></div>

        </div>

    <!-- CARD FORMULAIRE -->
    <div class="relative w-full max-w-4xl bg-white rounded-2xl shadow-2xl p-10 min-h-[720px] transition-all duration-500">
            <h1 class="text-5xl text-center font-bold text-blue-900 mb-4">
                Inscription
            </h1>
       <!-- PROGRESSION -->
        <div class="mb-8 space-y-2">
            <div class="flex justify-between text-sm text-gray-400">
                <span id="stepIndicator">Étape 1 sur 3</span>
                <span>Progression</span>
            </div>

            <!-- BARRE -->
            <div class="w-full h-2 bg-gray-200 rounded-full overflow-hidden">
                <div
                    id="progressBar"
                    class="h-full bg-[#ba06bf] rounded-full transition-all duration-500"
                    style="width: 33%;">
                </div>
            </div>
        </div>


        <form id="registerForm" method="POST" action="/register" class="relative" onsubmit="return validateStep()">
            @csrf

            <!-- STEP 1 : INFORMATIONS PERSONNELLES -->
           <div class="step flex flex-col justify-between min-h-[500px]">

                <!-- CONTENU -->
                <div class="space-y-6">
                    <h2 class="text-2xl font-bold text-gray-800">
                        Informations personnelles
                    </h2>


                    <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                        <input type="text" name="last_name" placeholder="Nom" class="w-full p-3 border rounded-lg" required data-require>
                        <input type="text" name="first_name" placeholder="Prénoms" class="w-full p-3 border rounded-lg" required data-require>
                        <input type="date" name="birth_date" class="w-full p-3 border rounded-lg text-gray-500" required data-require> 
                        <select name="country" class="w-full p-3 border rounded-lg text-gray-500" required data-require>
                            <option value="">Pays d'origine</option>
                            <option>Bénin</option>
                            <option>Togo</option>
                            <option>Sénégal</option>
                            <option>Côte d’Ivoire</option>
                            <option>France</option>
                            <option>Autre</option>
                        </select>
                        <input type="tel" name="phone" placeholder="Numéro de téléphone" class="w-full p-3 border rounded-lg" required data-require>
                        <input type="email" name="email" placeholder="Adresse e-mail" class="w-full p-3 border rounded-lg" required data-require>

                        <!-- MOT DE PASSE -->
                        <div class="relative md:col-span-2">

                                <!-- Input mot de passe -->
                                <input
                                    id="password"
                                    type="password"
                                    name="password"
                                    placeholder="Mot de passe"
                                    class="w-full p-3 pr-10 border rounded-lg focus:ring-2 focus:ring-blue-500 outline-none"
                                    required data-require
                                >

                                <!-- Icône œil -->
                                <button
                                    type="button"
                                    onclick="togglePassword()"
                                    class="absolute right-3 top-1/2 -translate-y-1/2 text-gray-400 hover:text-blue-600">
                                    <i id="eyeIcon" data-lucide="eye" class="w-5 h-5"></i>
                                </button>
                        </div>

                        <!-- CONFIRMATION MOT DE PASSE -->
                        <div class="relative md:col-span-2">

                            <input
                                id="password_confirmation"
                                type="password"
                                name="password_confirmation"
                                placeholder="Confirmer le mot de passe"
                                class="w-full p-3 pr-10 border rounded-lg focus:ring-2 focus:ring-blue-500 outline-none"
                                oninput="checkPasswords()"
                                required data-require
                            >

                            <button
                                type="button"
                                onclick="togglePassword0('password_confirmation','eyeIconConfirm')"
                                class="absolute right-3 top-1/2 -translate-y-1/2 text-gray-400 hover:text-blue-600">
                                <i id="eyeIconConfirm" data-lucide="eye" class="w-5 h-5"></i>
                            </button>
                        </div>

                        <!-- MESSAGE ERREUR -->
                        <p id="passwordError" class="text-sm text-red-500 hidden md:col-span-2">
                            Les mots de passe ne correspondent pas.
                        </p>
                    </div>
                </div>

                <p class="step-error text-red-500 text-sm hidden">
                    Veuillez remplir tous les champs obligatoires.
                </p>

                <!-- ACTION -->
                <button type="button" onclick="nextStep()"
                    class="w-full bg-[#ba06bf] text-white py-3 rounded-lg font-semibold">
                    Suivant
                </button>
           </div>

       
           <!-- STEP 2 : PARCOURS ACADÉMIQUE -->
           <div class="step hidden flex flex-col justify-between min-h-[500px]">


                <div class="space-y-6">
                    <h2 class="text-2xl font-bold text-gray-800">
                        Ton parcours académique
                    </h2>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-5">

                        <!-- Niveau d'étude -->
                        <select name="education_level"
                            class="w-full p-3 border rounded-lg text-gray-500" required data-require>
                            <option value="">Niveau d’étude</option>
                            <option>Baccalauréat</option>
                            <option>BTS / DUT</option>
                            <option>Licence</option>
                            <option>Master</option>
                            <option>Doctorat</option>
                            <option>Autodidacte</option>
                        </select>

                        <!-- Domaine -->
                        <input type="text" name="study_field"
                            placeholder="Domaine d’étude principal"
                            class="w-full p-3 border rounded-lg"
                            required data-require>

                        <!-- Type de formation -->
                        <select name="education_type"
                            class="w-full p-3 border rounded-lg text-gray-500"
                            required data-require>
                            <option value="">Type de formation</option>
                            <option>Universitaire</option>
                            <option>Professionnelle</option>
                            <option>Bootcamp</option>
                            <option>En ligne</option>
                            <option>Autodidacte</option>
                        </select>

                        <!-- Statut -->
                        <select name="current_status"
                            class="w-full p-3 border rounded-lg text-gray-500"
                            required data-require>
                            <option value="">Statut actuel</option>
                            <option>Étudiant</option>
                            <option>Diplômé</option>
                            <option>En reconversion</option>
                            <option>En recherche de formation</option>
                        </select>

                        <!-- Établissement -->
                        <input type="text" name="institution"
                            placeholder="Établissement (facultatif)"
                            class="w-full p-3 border rounded-lg">

                        <!-- Année d’obtention -->
                        <input type="number" name="graduation_year"
                            placeholder="Année d’obtention (ou prévue)"
                            class="w-full p-3 border rounded-lg"
                            required data-require>

                        <!-- Spécialisation -->
                        <input type="text" name="specialization"
                            placeholder="Spécialisation (facultatif)"
                            class="w-full p-3 border rounded-lg">

                        <!-- Langue d’étude -->
                        <select name="study_language"
                            class="w-full p-3 border rounded-lg text-gray-500"
                            required data-require>
                            <option value="">Langue principale d’étude</option>
                            <option>Français</option>
                            <option>Anglais</option>
                            <option>Bilingue</option>
                        </select>

                        <!-- Certifications -->
                        <input type="text" name="certifications"
                            placeholder="Certifications(facultatif) (ex : Google, AWS, Cisco)"
                            class="w-full p-3 border rounded-lg md:col-span-2">
                    </div>
                </div>
                <p class="step-error text-red-500 text-sm hidden">
                    Veuillez remplir tous les champs obligatoires.
                </p>

                <!-- ACTIONS -->
                <div class="flex gap-3">
                    <button type="button"
                        onclick="prevStep()"
                        class="w-1/2 border py-3 rounded-lg">
                        Retour
                    </button>

                    <button type="button"
                        onclick="nextStep()"
                        class="w-1/2 bg-[#ba06bf] text-white py-3 rounded-lg">
                        Suivant
                    </button>
                </div>

           </div>


            <!-- STEP 3 : EXPÉRIENCE & OBJECTIFS -->
           <div class="step hidden flex flex-col justify-between min-h-[500px]">

                <!-- CONTENU -->
                <div class="space-y-6">
                    <h2 class="text-2xl font-bold text-gray-800">
                        Ton expérience & tes objectifs
                    </h2>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-5">

                        <!-- Niveau d'expérience -->
                        <select name="experience_level"
                            class="w-full p-3 border rounded-lg text-gray-500"
                            required data-require>
                            <option value="">Niveau d’expérience</option>
                            <option>Débutant</option>
                            <option>Intermédiaire</option>
                            <option>Avancé</option>
                        </select>

                        <!-- Années d'expérience -->
                        <select name="experience_years"
                            class="w-full p-3 border rounded-lg text-gray-500"
                            required data-require>
                            <option value="">Années d’expérience</option>
                            <option>Moins d’un an</option>
                            <option>1 – 2 ans</option>
                            <option>3 – 5 ans</option>
                            <option>Plus de 5 ans</option>
                        </select>

                        <!-- Compétence principale -->
                        <input type="text" name="main_skill"
                            placeholder="Domaine ou compétence principale"
                            class="w-full p-3 border rounded-lg"
                            required data-require>

                        <!-- Outils maîtrisés -->
                        <input type="text" name="tools"
                            placeholder="Outils / technologies maîtrisés (ex : Excel, Figma, Python)"
                            class="w-full p-3 border rounded-lg"
                            required data-require>
                    </div>

                    <!-- Résumé expérience -->
                    <textarea name="experience_summary"
                        placeholder="Décris brièvement ton expérience (missions, projets, stages, freelance)"
                        class="w-full p-3 border rounded-lg h-28"
                        required data-require></textarea>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-5">

                        <!-- Objectif -->
                        <select name="career_goal" 
                            class="w-full p-3 border rounded-lg text-gray-500"
                            required data-require>
                            <option value="">Objectif principal</option>
                            <option>Acquérir de nouvelles compétences</option>
                            <option>Changer de métier</option>
                            <option>Évoluer professionnellement</option>
                            <option>Trouver un emploi</option>
                            <option>Lancer un projet personnel</option>
                        </select>

                        <!-- CV -->
                        <input type="file" name="cv"
                            class="w-full p-3 border rounded-lg">
                    </div>
                </div>
                <p class="step-error text-red-500 text-sm hidden">
                    Veuillez remplir tous les champs obligatoires.
                </p>


                <!-- ACTIONS -->
                <div class="flex gap-3">
                    <button type="button"
                        onclick="prevStep()"
                        class="w-1/2 border py-3 rounded-lg">
                        Retour
                    </button>

                    <button type="submit"
                        class="w-1/2 bg-[#ba06bf] text-white py-3 rounded-lg font-semibold">
                        Analyser mon profil
                    </button>
                </div>

           </div>



        </form>
    </div>

</section>

<script>
    let currentStep = 0;
    const steps = document.querySelectorAll('.step');
    const indicator = document.getElementById('stepIndicator');
    const progressBar = document.getElementById('progressBar');

    function showStep(index) {
        steps.forEach((step, i) => {
            step.classList.toggle('hidden', i !== index);
        });

        const totalSteps = steps.length;
        const percent = ((index + 1) / totalSteps) * 100;

        indicator.textContent = `Étape ${index + 1} sur ${totalSteps}`;
        progressBar.style.width = percent + '%';
    }

    function validateStep() {
    const currentStepElement = steps[currentStep];
    const requiredFields = currentStepElement.querySelectorAll('[data-require]');
    const errorMessage = currentStepElement.querySelector('.step-error');

    let valid = true;

    requiredFields.forEach(field => {
        field.classList.remove('border-red-500');

        if (!field.value.trim()) {
            valid = false;
            field.classList.add('border-red-500');
        }
    });

    if (!valid) {
        errorMessage.classList.remove('hidden');
    } else {
        errorMessage.classList.add('hidden');
    }

    return valid;
}

function nextStep() {
    if (!validateStep()) return;

    if (currentStep < steps.length - 1) {
        currentStep++;
        showStep(currentStep);
    }
}

    function prevStep() {
        if (currentStep > 0) {
            currentStep--;
            showStep(currentStep);
        }
    }

    showStep(currentStep);
    function togglePassword() {
        const passwordInput = document.getElementById('password');
        const eyeIcon = document.getElementById('eyeIcon');

        if (passwordInput.type === 'password') {
            passwordInput.type = 'text';
            eyeIcon.setAttribute('data-lucide', 'eye-off');
        } else {
            passwordInput.type = 'password';
            eyeIcon.setAttribute('data-lucide', 'eye');
        }

        lucide.createIcons();
    }

    function togglePassword0(inputId, iconId) {
        const input = document.getElementById(inputId);
        const icon = document.getElementById(iconId);

        if (input.type === 'password') {
            input.type = 'text';
            icon.setAttribute('data-lucide', 'eye-off');
        } else {
            input.type = 'password';
            icon.setAttribute('data-lucide', 'eye');
        }

        lucide.createIcons();
    }

    function checkPasswords() {
        const password = document.getElementById('password').value;
        const confirm = document.getElementById('password_confirmation').value;
        const error = document.getElementById('passwordError');

        if (confirm.length === 0) {
            error.classList.add('hidden');
            return;
        }

        if (password !== confirm) {
            error.classList.remove('hidden');
        } else {
            error.classList.add('hidden');
        }
    }
</script>



@endsection
