@extends('layouts.auth')

@section('title', "Se connecter – SkillMatchr")

@section('content')

<section class="relative min-h-screen flex items-center justify-center bg-white px-20 py-10 h-[120vh]">

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
    <div class="relative w-full max-w-xl bg-white rounded-2xl shadow-2xl p-10">
            <h1 class="text-5xl text-center font-bold text-blue-900 mb-4">
                Connexion
            </h1>


            <form class="space-y-5">

                <!-- EMAIL -->
                <div class="relative">
                    <!-- Icône email -->
                    <i data-lucide="mail"
                    class="absolute left-3 top-1/2 -translate-y-1/2 w-5 h-5 text-gray-400"></i>

                    <input
                        type="email"
                        class="w-full border p-3 pl-10 rounded-lg focus:ring-2 focus:ring-blue-500 outline-none"
                        placeholder="Email"
                    >
                </div>

                <!-- MOT DE PASSE -->
                <div class="relative">
                    <!-- Icône cadenas -->
                    <i data-lucide="lock"
                    class="absolute left-3 top-1/2 -translate-y-1/2 w-5 h-5 text-gray-400"></i>

                    <!-- Input -->
                    <input
                        id="password"
                        type="password"
                        class="w-full border p-3 pl-10 pr-10 rounded-lg focus:ring-2 focus:ring-blue-500 outline-none"
                        placeholder="Mot de passe"
                    >

                    <!-- Icône œil -->
                    <button
                        type="button"
                        onclick="togglePassword()"
                        class="absolute right-3 top-1/2 -translate-y-1/2 text-gray-400 hover:text-blue-600">
                        <i id="eyeIcon" data-lucide="eye" class="w-5 h-5"></i>
                    </button>
                </div>

                <!-- BOUTON -->
                <button
                    class="w-full bg-blue-600 text-white py-3 rounded-lg font-semibold hover:bg-blue-700 transition">
                    Se connecter
                </button>

                <!-- MOT DE PASSE OUBLIÉ -->
                <div class="pt-4 text-center">
                    <a
                        href="#"
                        class="text-sm text-gray-600 hover:text-blue-600 transition">
                        Vous avez oublié le mot de passe ?
                    </a>
                </div>

            </form>


    </div>

</section>

<script>
    let currentStep = 0;
    const steps = document.querySelectorAll('.step');
    const indicator = document.getElementById('stepIndicator');

    function showStep(index) {
        steps.forEach((step, i) => {
            step.classList.toggle('hidden', i !== index);
        });
        indicator.textContent = `Étape ${index + 1} sur ${steps.length}`;
    }

    function nextStep() {
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


</script>

@endsection
