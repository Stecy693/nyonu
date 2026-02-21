@extends('layouts.app')

@section('title', 'Nyɔnu | Femmes leaders, culture béninoise')

@section('content')
    {{-- Section Hero --}}
    <section  id="hero"  class="relative flex flex-col lg:flex-row scroll-mt-24 items-center justify-between gap-10 px-6 sm:px-10 lg:px-20 py-16 lg:py-20 min-h-[70vh] lg:min-h-screen overflow-hidden mt-5">
   
        {{-- Image de fond à droite --}}
        <img
            src="{{ asset('images/Background1.png') }}"
            alt=""
            aria-hidden="true"
            fetchpriority="high"
            loading="eager"
            decoding="async"
            class="absolute inset-0 w-full h-full object-cover object-[center_90%] sm:object-contain sm:object-center lg:object-contain lg:object-right opacity-20 sm:opacity-40 lg:opacity-90 pointer-events-none select-none"
        >

        {{-- Contenu texte à gauche --}}
        <div class="relative z-10 max-w-2xl text-left">
            <h1 class="text-4xl sm:text-4xl lg:text-5xl font-bold text-black mb-4">
                Révèle le leadership qui sommeille en toi.
            </h1>
            <p class="text-gray-600 mb-6 text-xl">
            Inspiré des figures féminines béninoises et guidé par l’intelligence artificielle, Nyonu t’accompagne pour comprendre ton potentiel, structurer ton parcours et bâtir un leadership qui te ressemble.
            </p>
            {{-- Bouton d'inscription --}}
           <div class="mt-6">
                <a href="#leadership" class="inline-flex items-center bg-[#ba06bf] text-white px-5 sm:px-6 py-3 rounded-full hover:bg-[#760e79] transition text-xl">
                    En savoir plus
                    <i data-lucide="chevron-right" class="ml-2 w-5 h-5"></i>
                </a>
           </div>

        </div>


     {{-- Vague décorative en bas du Hero (même couleur que la section suivante) --}}
        
        <div class="absolute bottom-0 left-0 w-full overflow-hidden leading-[0]">
            <svg class="relative block w-[calc(100%+2px)] h-[60px] sm:h-[80px] lg:h-[100px] transform scale-x-[-1]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,
                82.39-16.49,168.19-17.39,250.45-.39C823.78,27,
                906.67,63.73,985.66,91.19c70,24.15,146.53,
                38.25,214.34,18.13V120H0V16.48C95.15,36.82,
                219.73,74.73,321.39,56.44Z" fill="#f5f5f5"></path>
            </svg>
        </div>

    </section>

    {{-- Section Explication --}}
    <section id="leadership" class="bg-[#f5f5f5] text-center scroll-mt-24 py-16 sm:py-20 px-6 sm:px-8">
        <h2 class="text-4xl font-bold text-black mb-6">
           Comprendre le leadership féminin
        </h2>
        <p class="text-gray-600 max-w-2xl mx-auto mb-10 text-xl">
            Le leadership féminin ne se limite pas à diriger ou à occuper une position de pouvoir. Il s’exprime dans la manière d’influencer, de transmettre et de faire grandir les autres, souvent à partir de valeurs profondément humaines et culturelles.
        </p> 

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-6xl mx-auto">
            
            {{-- Étape 1 --}}
            <div class="bg-[#ffffff] rounded-3xl border-b-4 border-[#760e79] p-8 sm:p-10 shadow-md shadow-gray-100 transition-all duration-300 hover:shadow-xl hover:shadow-[#ba06bf24] hover:border-[#e0a3e1]">
            <div class="flex justify-center mb-6">
                <div class="w-24 h-24 bg-[#f5f5f5] rounded-full overflow-hidden inline-flex items-center justify-center transition-all duration-300 hover:bg-blue-200">
                <img src="{{ asset('images/Icon1.png') }}" alt="Icone 1" class="object-cover">
                </div>
            </div>
            <h3 class="text-2xl font-semibold text-gray-800 mb-3">Influencer avec sens</h3>
            <p class="text-gray-700">
                Le leadership féminin repose sur une vision claire et des valeurs fortes. Il s’agit de guider par l’exemple, en donnant du sens aux actions et en tenant compte des réalités humaines.
            </p>
            </div>

            {{-- Étape 2 --}}
            <div class="bg-[#ffffff] rounded-3xl border-b-4 border-[#760e79] p-8 sm:p-10 shadow-md shadow-gray-100 transition-all duration-300 hover:shadow-xl hover:shadow-[#ba06bf24] hover:border-[#e0a3e1]">
            <div class="flex justify-center mb-6">
                <div class="w-24 h-24 bg-[#f5f5f5] rounded-full overflow-hidden inline-flex items-center justify-center transition-all duration-300 hover:bg-blue-200">
                <img src="{{ asset('images/Icon2.png') }}" alt="Icone 2" class="object-cover">
                </div>
            </div>
            <h3 class="text-2xl font-semibold text-gray-800 mb-3">Diriger avec humanité</h3>
            <p class="text-gray-700">
           L’écoute, l’empathie et la capacité à créer des relations solides sont au cœur du leadership féminin. Cette approche favorise la confiance, la coopération et l’engagement collectif.
            </p>
            </div>

            {{-- Étape 3 --}}
            <div class="bg-[#ffffff] rounded-3xl border-b-4 border-[#760e79] p-8 sm:p-10 shadow-md shadow-gray-100 transition-all duration-300 hover:shadow-xl hover:shadow-[#ba06bf24] hover:border-[#e0a3e1]">
            <div class="flex justify-center mb-6">
                <div class="w-24 h-24 bg-[#f5f5f5] rounded-full overflow-hidden inline-flex items-center justify-center transition-all duration-300 hover:bg-blue-200">
                <img src="{{ asset('images/Icon3.png') }}" alt="Icone 3" class="object-cover">
                </div>
            </div>
            <h3 class="text-2xl font-semibold text-gray-800 mb-3">Transformer durablement</h3>
            <p class="text-gray-700">
                Le leadership féminin agit sur le long terme. Il vise à transformer les mentalités, renforcer les communautés et construire un développement plus inclusif et équilibré.
            </p>
            </div>

        </div>
    </section>

   {{-- Section valeurs--}}
   <section id="valeurs" class="py-16 sm:py-20 scroll-mt-24 bg-white">
        <div class="max-w-7xl mx-auto flex flex-col lg:flex-row items-center gap-12 px-6 sm:px-8">

            {{-- Image à gauche --}}
            <div class="lg:w-1/2 relative w-full max-w-xl">
            {{-- Rectangle décoratif --}}
            <div class="absolute bottom-[-3.75rem] top-[-4.75rem]  w-[80%] h-[138%] rounded-2xl z-0"></div>
            
            {{-- Image principale --}}
            <img src="{{ asset('images/Image-1.png') }}" 
                alt="Illustration" 
                class="rounded-2xl right-0 sm:right-10 lg:right-20 relative z-10 w-full h-auto object-cover">
            </div>

            {{-- Contenu à droite --}}
            <div class="lg:w-1/2">
                <h2 class="text-4xl font-bold text-black mb-4">Valeurs & Identité</h2>
                    <p class="text-gray-600 mb-8 text-xl">
                        Le leadership féminin au Bénin ne naît pas du hasard. Il s’enracine dans des valeurs culturelles fortes : responsabilité, transmission, solidarité et sens du collectif. Comprendre ces fondations permet de mieux saisir la place stratégique des femmes dans l’évolution de la société.</p>
                    <p class="text-gray-600 mb-8 text-xl">
                        L’autonomisation commence par la connaissance de soi et de son héritage. En reconnaissant son identité culturelle, une femme peut transformer ses valeurs en force stratégique et en levier d’impact durable.
                    </p>
            {{-- Qualités --}}
            <div class="space-y-6">
                <div class="flex items-start gap-4">
                <div class="flex-shrink-0 w-9 h-9 bg-[#ba06bf] text-white rounded-full flex items-center justify-center">
                    <i data-lucide="users" class="w-5 h-5"></i>
                </div>
                <div>
                    <h4 class="font-semibold text-xl text-gray-900">Culture et leadership</h4>
                    <p class="text-gray-600"> Au Bénin, le leadership féminin s’appuie sur la transmission, la solidarité et le sens du collectif.</p>
                </div>
                </div>

                <div class="flex items-start gap-4">
                <div class="flex-shrink-0 w-9 h-9 bg-[#ba06bf] text-white rounded-full flex items-center justify-center">
                    <i data-lucide="fingerprint" class="w-5 h-5"></i>
                </div>
                <div>
                    <h4 class="font-semibold text-xl text-gray-900">Identité comme force</h4>
                    <p class="text-gray-600"> Connaître son identité culturelle permet de diriger avec confiance et responsabilité.</p>
                </div>
                </div>

                <div class="flex items-start gap-4">
                <div class="flex-shrink-0 w-9 h-9 bg-[#ba06bf] text-white rounded-full flex items-center justify-center">
                    <i data-lucide="graduation-cap" class="w-5 h-5"></i>
                </div>
                <div>
                    <h4 class="font-semibold text-xl text-gray-900">Autonomisation</h4>
                    <p class="text-gray-600">L’autonomie naît de la connaissance, de la formation et de la valorisation de son potentiel.</p>
                </div>
                </div>
                </div>
            </div>
        </div>

   </section>

    {{-- Vague décorative entre Valeurs et Femmes inspirantes --}}
    <div class="relative w-full overflow-hidden leading-[0]">
        <svg class="relative block w-[calc(100%+2px)] h-[60px] sm:h-[80px] lg:h-[100px]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 100" preserveAspectRatio="none">
            <path d="M0,60
                     C180,10 360,110 540,60
                     C700,20 820,20 960,60
                     C1080,90 1160,80 1200,60
                     L1200,100 L0,100 Z"
                 fill="#f5f5f5"></path>
        </svg>
    </div>

   {{-- Section Femmes inspirantes --}}
   <section id="femmes" class="bg-[#f5f5f5] text-center scroll-mt-24 py-16 sm:py-20 px-6 sm:px-8">
        <h2 class="text-4xl font-bold text-black mb-4">
            Figures féminines inspirantes
        </h2>
        <p class="text-gray-600 max-w-2xl mx-auto mb-12 text-xl">
            Des femmes qui, par leurs actions et leur influence, incarnent différentes formes de leadership féminin béninois.
        </p>

        <div class="max-w-6xl mx-auto space-y-10">
            <div class="grid gap-10 sm:grid-cols-2 lg:grid-cols-3 justify-items-center items-stretch">
                <div class="text-left w-full max-w-[400px] h-full">
                    <div class="group rounded-3xl border border-[#e9d6ea] bg-white/90 shadow-md transition-all duration-300 overflow-hidden h-[520px] flex flex-col">
                        <div class="p-4">
                            <div class="relative rounded-2xl overflow-hidden">
                                <img src="{{ asset('images/femmes/femme-1.png') }}" alt="Nom 1" class="w-full h-56 sm:h-64 lg:h-72 object-cover object-top transition-transform duration-300 group-hover:scale-[1.02]">
                                <div class="absolute inset-0 bg-black/60 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end">
                                    <p class="text-white text-sm sm:text-base p-4">
                                       Artiste béninoise de renommée internationale, Angélique Kidjo utilise la musique comme outil de dialogue, de plaidoyer et d’influence culturelle. Elle s’engage activement pour l’éducation, les droits des enfants et la valorisation des cultures africaines.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="px-6 pb-7 pt-2 flex-1 flex flex-col">
                            <div class="h-1 w-16 bg-[#ba06bf] rounded-full mx-auto mb-4"></div>
                            <h3 class="text-2xl text-center font-semibold text-black">Angélique Kidjo</h3>
                            <p class="text-xl text-gray-600 text-center min-h-[3.5rem]">Ambassadrice culturelle et voix africaine de portée mondiale</p>
                            <div class="mt-4 flex justify-center mt-auto">
                                <a href="https://fr.wikipedia.org/wiki/Ang%C3%A9lique_Kidjo" class="inline-flex items-center text-[#ba06bf] border border-[#ba06bf] px-4 py-2 rounded-full hover:bg-[#ba06bf] hover:text-white transition">
                                    En savoir plus
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="text-left w-full max-w-[400px] h-full">
                    <div class="group rounded-3xl border border-[#e9d6ea] bg-white/90 shadow-md transition-all duration-300 overflow-hidden h-[520px] flex flex-col">
                        <div class="p-4">
                            <div class="relative rounded-2xl overflow-hidden">
                                <img src="{{ asset('images/femmes/femme-2.png') }}" alt="Nom 2" class="w-full h-56 sm:h-64 lg:h-72 object-cover object-top transition-transform duration-300 group-hover:scale-[1.02]">
                                <div class="absolute inset-0 bg-black/60 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end">
                                    <p class="text-white text-sm sm:text-base p-4">
                                        Reine du Dahomey au XVIIIᵉ siècle, Tassi Hangbè est l’une des rares femmes à avoir exercé le pouvoir suprême dans l’histoire du Bénin. Elle incarne l’autorité, la stratégie et le courage féminin dans un contexte politique et militaire dominé par les hommes.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="px-6 pb-7 pt-2 flex-1 flex flex-col">
                            <div class="h-1 w-16 bg-[#ba06bf] rounded-full mx-auto mb-4"></div>
                            <h3 class="text-2xl text-center font-semibold text-black">Tassi Hangbè</h3>
                            <p class="text-xl text-gray-600 text-center min-h-[3.5rem]">Figure historique du pouvoir féminin et du leadership traditionnel</p>
                            <div class="mt-4 flex justify-center mt-auto">
                                <a href="https://fr.wikipedia.org/wiki/Tassin_Hangb%C3%A8" class="inline-flex items-center text-[#ba06bf] border border-[#ba06bf] px-4 py-2 rounded-full hover:bg-[#ba06bf] hover:text-white transition">
                                    En savoir plus
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="text-left w-full max-w-[400px] h-full">
                    <div class="group rounded-3xl border border-[#e9d6ea] bg-white/90 shadow-md transition-all duration-300 overflow-hidden h-[520px] flex flex-col">
                        <div class="p-4">
                            <div class="relative rounded-2xl overflow-hidden">
                                <img src="{{ asset('images/femmes/femme-3.png') }}" alt="Nom 3" class="w-full h-56 sm:h-64 lg:h-72 object-cover object-top transition-transform duration-300 group-hover:scale-[1.02]">
                                <div class="absolute inset-0 bg-black/60 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end">
                                    <p class="text-white text-sm sm:text-base p-4">
                                        Avocate et médiatrice internationale, Marie-Élise Gbèdo œuvre pour la promotion de la paix, de la justice et des droits fondamentaux. Elle est reconnue pour son engagement en faveur de la démocratie et de la résolution pacifique des conflits.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="px-6 pb-7 pt-2 flex-1 flex flex-col">
                            <div class="h-1 w-16 bg-[#ba06bf] rounded-full mx-auto mb-4"></div>
                            <h3 class="text-2xl text-center font-semibold text-black">Marie-Élise Gbèdo</h3>
                            <p class="text-xl text-gray-600 text-center min-h-[3.5rem]">Juriste engagée pour la justice, la paix et les droits humains</p>
                            <div class="mt-4 flex justify-center mt-auto">
                                <a href="https://fr.wikipedia.org/wiki/Marie-%C3%89lise_Gb%C3%A8do" class="inline-flex items-center text-[#ba06bf] border border-[#ba06bf] px-4 py-2 rounded-full hover:bg-[#ba06bf] hover:text-white transition">
                                    En savoir plus
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="grid gap-10 sm:grid-cols-2 lg:grid-cols-3 justify-items-center items-stretch">
                <div class="text-left w-full max-w-[400px] h-full">
                    <div class="group rounded-3xl border border-[#e9d6ea] bg-white/90 shadow-md transition-all duration-300 overflow-hidden h-[520px] flex flex-col">
                        <div class="p-4">
                            <div class="relative rounded-2xl overflow-hidden">
                                <img src="{{ asset('images/femmes/femme-4.png') }}" alt="Nom 4" class="w-full h-56 sm:h-64 lg:h-72 object-cover object-top transition-transform duration-300 group-hover:scale-[1.02]">
                                <div class="absolute inset-0 bg-black/60 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end">
                                    <p class="text-white text-sm sm:text-base p-4">
                                        Ministre du Numérique et de la Digitalisation, Aurélie Adam Soulé Zoumarou pilote la modernisation technologique de l’administration béninoise. Elle œuvre pour un numérique inclusif, efficace et au service du développement.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="px-6 pb-7 pt-2 flex-1 flex flex-col">
                            <div class="h-1 w-16 bg-[#ba06bf] rounded-full mx-auto mb-4"></div>
                            <h3 class="text-2xl text-center font-semibold text-black">Aurélie Adam Soulé</h3>
                            <p class="text-xl text-gray-600 text-center min-h-[3.5rem]">Figure du leadership numérique et de l’innovation publique</p>
                            <div class="mt-4 flex justify-center mt-auto">
                                <a href="https://fr.wikipedia.org/wiki/Aur%C3%A9lie_Adam_Soul%C3%A9" class="inline-flex items-center text-[#ba06bf] border border-[#ba06bf] px-4 py-2 rounded-full hover:bg-[#ba06bf] hover:text-white transition">
                                    En savoir plus
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="text-left w-full max-w-[400px] h-full">
                    <div class="group rounded-3xl border border-[#e9d6ea] bg-white/90 shadow-md transition-all duration-300 overflow-hidden h-[520px] flex flex-col">
                        <div class="p-4">
                            <div class="relative rounded-2xl overflow-hidden">
                                <img src="{{ asset('images/femmes/femme-5.png') }}" alt="Nom 5" class="w-full h-56 sm:h-64 lg:h-72 object-cover object-top transition-transform duration-300 group-hover:scale-[1.02]">
                                <div class="absolute inset-0 bg-black/60 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end">
                                    <p class="text-white text-sm sm:text-base p-4">
                                       Figure du leadership économique et de la gouvernance stratégique, engagée dans la transformation des politiques publiques et le développement des écosystèmes d’innovation au Bénin.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="px-6 pb-7 pt-2 flex-1 flex flex-col">
                            <div class="h-1 w-16 bg-[#ba06bf] rounded-full mx-auto mb-4"></div>
                            <h3 class="text-2xl text-center font-semibold text-black">Claude Borna</h3>
                            <p class="text-xl text-gray-600 text-center min-h-[3.5rem]">Leadership économique & transformation publique</p>
                            <div class="mt-4 flex justify-center mt-auto">
                                <a href="https://fr.wikipedia.org/wiki/Claude_Borna" class="inline-flex items-center text-[#ba06bf] border border-[#ba06bf] px-4 py-2 rounded-full hover:bg-[#ba06bf] hover:text-white transition">
                                    En savoir plus
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="text-left w-full max-w-[400px] h-full">
                    <div class="group rounded-3xl border border-[#e9d6ea] bg-white/90 shadow-md transition-all duration-300 overflow-hidden h-[520px] flex flex-col">
                        <div class="p-4">
                            <div class="relative rounded-2xl overflow-hidden">
                                <img src="{{ asset('images/femmes/femme-6.png') }}" alt="Nom 6" class="w-full h-56 sm:h-64 lg:h-72 object-cover object-top transition-transform duration-300 group-hover:scale-[1.02]">
                                <div class="absolute inset-0 bg-black/60 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end">
                                    <p class="text-white text-sm sm:text-base p-4">
                                        Spécialiste du 800 mètres, Noëlie Yarigo est l’une des figures majeures de l’athlétisme béninois sur la scène internationale. Par sa discipline et sa persévérance, elle inspire la jeunesse à viser l’excellence et le dépassement de soi.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="px-6 pb-7 pt-2 flex-1 flex flex-col">
                            <div class="h-1 w-16 bg-[#ba06bf] rounded-full mx-auto mb-4"></div>
                            <h3 class="text-2xl text-center font-semibold text-black">Noëlie Yarigo</h3>
                            <p class="text-xl text-gray-600 text-center min-h-[3.5rem]">Athlète d’élite et modèle de leadership par l’excellence sportive</p>
                            <div class="mt-4 flex justify-center mt-auto">
                                <a href="https://fr.wikipedia.org/wiki/No%C3%A9lie_Yarigo" class="inline-flex items-center text-[#ba06bf] border border-[#ba06bf] px-4 py-2 rounded-full hover:bg-[#ba06bf] hover:text-white transition">
                                    En savoir plus
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
   </section>


   {{-- Section Mini Expérience --}}
   <section id="parcours" class="bg-white py-16 sm:py-20 px-6">
        <div class="max-w-6xl mx-auto text-center">
            <h2 class="text-4xl font-bold text-black mb-6">
                Révèle ton leadership
            </h2>
            <p class="text-gray-600 text-xl max-w-4xl mx-auto mb-10">
                Réponds aux questions, découvre ton profil de leadership et reçois une orientation concrète pour construire ton avenir.
            </p>

            <a id="start-experience" href="#experience" class="inline-flex items-center bg-[#ba06bf] text-white px-6 py-3 rounded-full hover:bg-[#760e79] transition text-xl">
                Démarrer l’expérience
            </a>

            <div id="experience" class="mt-10 text-left hidden">
                <div class="rounded-2xl  bg-white p-8 shadow-lg border border-[#debddf59]">
                    <div class="mb-5">
                        <div class="flex items-center justify-between text-xl text-gray-600 mb-2">
                            <span id="quiz-progress-label">Progression</span>
                            <span id="quiz-progress-step">1/3</span>
                        </div>
                        <div class="w-full h-2 rounded-full bg-[#f0e3f2] overflow-hidden">
                            <div id="quiz-progress-bar" class="h-full w-1/3 bg-[#ba06bf] transition-all duration-300"></div>
                        </div>
                    </div>
                    <div id="quiz-step-1" class="h-[400px] flex flex-col">
                        <div class="grid grid-cols-1 md:grid-cols-2 items-stretch md:gap-x-2 mb-0 overflow-y-auto pr-1 ">
                            <label class="flex h-full flex-col gap-2 rounded-xl p-2">
                                <span class="font-semibold">Nom</span>
                                <input type="text" id="quiz-lastname" class="w-full border border-[#e9d6ea] rounded-lg px-3 py-2">
                            </label>

                            <label class="flex h-full flex-col gap-2 rounded-xl p-2">
                                <span class="font-semibold">Prénom</span>
                                <input type="text" id="quiz-firstname" class="w-full border border-[#e9d6ea] rounded-lg px-3 py-2">
                            </label>

                            <label class="flex h-full flex-col gap-2 rounded-x p-2">
                                <span class="font-semibold">Âge</span>
                                <input type="number" id="quiz-age" class="w-full border border-[#e9d6ea] rounded-lg px-3 py-2" placeholder="Ex: 22">
                            </label>

                            <label class="flex h-full flex-col gap-2 rounded-xl  p-2">
                                <span class="font-semibold">Niveau d'étude</span>
                                <select id="quiz-education" class="w-full border border-[#e9d6ea] rounded-lg px-3 py-2">
                                    <option value="">Sélectionner</option>
                                    <option value="lycee">Lycée</option>
                                    <option value="bac">Baccalauréat</option>
                                    <option value="licence">Licence</option>
                                    <option value="master">Master</option>
                                    <option value="doctorat">Doctorat</option>
                                    <option value="professionnelle">Formation professionnelle</option>
                                </select>
                            </label>
                            <label class="md:col-span-2 flex h-full flex-col gap-2 rounded-xl  p-2">
                                <span class="font-semibold">Petite description</span>
                                <textarea id="quiz-desc" class="w-full border border-[#e9d6ea] rounded-lg px-3 py-2 h-[87px]" placeholder="Quelques mots sur toi..."></textarea>
                            </label>
                        </div>

                        <div class="flex justify-end mt-auto pt-8 mb-0">
                            <button id="quiz-next-1" class="bg-[#ba06bf] text-white px-6 py-3 rounded-full hover:bg-[#760e79] transition">Suivant</button>
                        </div>
                    </div>

                    <div id="quiz-step-2" class="hidden h-[400px] flex flex-col">
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-0 overflow-y-auto pr-1 " id="quiz-choices">
                            <label class="flex items-start gap-3 rounded-xl border border-[#e9d6ea] p-2">
                                <input type="checkbox" class="mt-1" data-profile="kidjo">
                                <span>Je crois que l’art, la culture ou la parole peuvent transformer la société.</span>
                            </label>
                            <label class="flex items-start gap-3 rounded-xl border border-[#e9d6ea] p-2">
                                <input type="checkbox" class="mt-1" data-profile="kidjo">
                                <span>Je me sens à l’aise pour représenter ma communauté au-delà de mon environnement habituel.</span>
                            </label>
                            <label class="flex items-start gap-3 rounded-xl border border-[#e9d6ea] p-2">
                                <input type="checkbox" class="mt-1" data-profile="hangbe">
                                <span>Je n’ai pas peur d’assumer des responsabilités même dans des contextes difficiles.</span>
                            </label>
                            <label class="flex items-start gap-3 rounded-xl border border-[#e9d6ea] p-2">
                                <input type="checkbox" class="mt-1" data-profile="hangbe">
                                <span>Je prends des décisions fermes quand il le faut, même si elles ne plaisent pas à tout le monde.</span>
                            </label>
                            <label class="flex items-start gap-3 rounded-xl border border-[#e9d6ea] p-2">
                                <input type="checkbox" class="mt-1" data-profile="gbedo">
                                <span>Je ressens profondément le besoin de défendre ceux qui n’ont pas de voix.</span>
                            </label>
                            <label class="flex items-start gap-3 rounded-xl border border-[#e9d6ea] p-2">
                                <input type="checkbox" class="mt-1" data-profile="gbedo">
                                <span>Je crois aux solutions pacifiques et au dialogue pour résoudre les conflits.</span>
                            </label>
                            <label class="flex items-start gap-3 rounded-xl border border-[#e9d6ea] p-2">
                                <input type="checkbox" class="mt-1" data-profile="aurelie">
                                <span>J’aime améliorer les systèmes existants pour les rendre plus efficaces.</span>
                            </label>
                            <label class="flex items-start gap-3 rounded-xl border border-[#e9d6ea] p-2">
                                <input type="checkbox" class="mt-1" data-profile="aurelie">
                                <span>Je m’intéresse aux technologies et aux nouvelles méthodes pour résoudre des problèmes.</span>
                            </label>
                            <label class="flex items-start gap-3 rounded-xl border border-[#e9d6ea] p-2">
                                <input type="checkbox" class="mt-1" data-profile="borna">
                                <span>Je réfléchis souvent en termes de stratégie et d’organisation à long terme.</span>
                            </label>
                            <label class="flex items-start gap-3 rounded-xl border border-[#e9d6ea] p-2">
                                <input type="checkbox" class="mt-1" data-profile="borna">
                                <span>Je cherche à créer des structures durables plutôt que des solutions temporaires.</span>
                            </label>
                            <label class="flex items-start gap-3 rounded-xl border border-[#e9d6ea] p-2">
                                <input type="checkbox" class="mt-1" data-profile="yarigo">
                                <span>Je suis prête à faire des sacrifices personnels pour atteindre mes objectifs.</span>
                            </label>
                            <label class="flex items-start gap-3 rounded-xl border border-[#e9d6ea] p-2">
                                <input type="checkbox" class="mt-1" data-profile="yarigo">
                                <span>La constance et la discipline sont pour moi plus importantes que la motivation.</span>
                            </label>
                        </div>
                        <div class="flex flex-col sm:flex-row gap-3 sm:justify-between mt-auto pt-8 mb-0">
                            <button id="quiz-prev-2" class="border border-[#ba06bf] text-[#ba06bf] px-6 py-3 rounded-full hover:bg-[#ba06bf] hover:text-white transition">Précédent</button>
                            <button id="quiz-next-2" class="bg-[#ba06bf] text-white px-6 py-3 rounded-full hover:bg-[#760e79] transition">Soumettre</button>
                        </div>
                    </div>

                    <div id="quiz-step-3" class="hidden h-[400px] flex flex-col">
                        <div id="quiz-result" class="hidden rounded-xl border border-[#e9d6ea] p-5 mb-0 h-[400px] overflow-y-auto bg-white text-gray-700 leading-relaxed">
                            <div id="quiz-result-text" class="whitespace-pre-line">Votre synthèse va apparaître ici...</div>
                        </div>
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 mt-auto pt-8 mb-0 items-center">
                            <button id="quiz-prev-3" class="w-full sm:w-auto justify-self-stretch sm:justify-self-start border border-[#ba06bf] text-[#ba06bf] px-6 py-3 rounded-full hover:bg-[#ba06bf] hover:text-white transition">
                                Précédent
                            </button>
                            <button id="quiz-reset" class="w-full sm:w-auto justify-self-stretch sm:justify-self-end border border-[#ba06bf] text-[#ba06bf] px-6 py-3 rounded-full hover:bg-[#ba06bf] hover:text-white transition">
                                Effacer
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
   </section>

   
  {{-- Section gamification évaluation --}}
  <section id="badge-evaluation" class="hidden bg-[#f5f5f5]  py-16 sm:py-20 px-6">
        <div class="max-w-5xl mx-auto">
            <div class="text-center mb-10">
                <h2 class="text-4xl font-bold text-black mb-4">Évaluation interactive</h2>
                <p class="text-gray-700 text-lg">
                    Teste ce que tu as retenu du site et débloque ton certificat.
                </p>
            </div>

            <div class="rounded-3xl border border-[#e9d6ea] bg-white p-6 sm:p-8 shadow-md">
                <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-3 mb-6">
                    <div class="text-xl text-gray-600">
                        <span id="game-progress-label">Question 1/10</span>
                    </div>
                    <div class="text-xl font-semibold text-[#760e79]">
                        XP: <span id="game-xp">0</span> | Série: <span id="game-streak">0</span>
                    </div>
                </div>

                <div class="w-full h-2 rounded-full bg-[#f0e3f2] overflow-hidden mb-6">
                    <div id="game-progress-bar" class="h-full bg-[#ba06bf] transition-all duration-300" style="width: 10%;"></div>
                </div>

                <div id="game-card" class="rounded-2xl border border-[#f0dff1] p-5 sm:p-6 bg-[#fffafe]">
                    <p id="game-question" class="text-xl font-semibold text-black mb-5"></p>
                    <div id="game-options" class="grid grid-cols-1 gap-3"></div>
                    <p id="game-feedback" class="hidden mt-4 text-xl"></p>
                    <div class="mt-6 flex justify-end">
                        <button id="game-next" class="hidden bg-[#ba06bf] text-white px-5 py-2.5 rounded-full hover:bg-[#760e79] transition">
                            Question suivante
                        </button>
                    </div>
                </div>

                <div id="game-result" class="hidden mt-6 rounded-2xl border border-[#e9d6ea] bg-[#fff7ff] p-6">
                    <p class="text-xl text-gray-600 mb-1">Résultat final</p>
                    <p id="game-score-line" class="text-xl  font-semibold text-black"></p>
                    <p id="game-status" class="mt-2 text-xl  font-medium"></p>
                    <div id="game-review" class="mt-5 rounded-xl border border-[#ead8ec] bg-white p-4 max-h-72 overflow-y-auto pr-2">
                        <p class="text-base font-semibold text-gray-700 mb-2">Corrigé de l'évaluation</p>
                        <ul id="game-review-list" class="space-y-2 text-lg text-gray-700"></ul>
                    </div>

                    <div class="mt-5 flex flex-col sm:flex-row gap-3">
                        <button id="download-certificate" class="bg-[#ba06bf] text-white px-6 py-3 rounded-full hover:bg-[#760e79] transition">
                            Télécharger mon certificat
                        </button>
                        <button id="restart-game" class="border border-[#ba06bf] text-[#ba06bf] px-6 py-3 rounded-full hover:bg-[#ba06bf] hover:text-white transition">
                            Rejouer
                        </button>
                    </div>
                </div>
            </div>
        </div>
  </section>

    {{-- Section pourquoi ce projet --}}
    <section id="parcours" class="relative overflow-hidden text-white py-16 sm:py-20 px-6">
        <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('{{ asset('images/femmes/femmes_africaines.jpg') }}');"></div>
        <div class="absolute inset-0" style="background: linear-gradient(135deg, rgba(186, 6, 191, 0.75) 0%, rgba(118, 14, 121, 0.85) 100%);"></div>

        <div class="relative max-w-4xl mx-auto text-center">
            <h2 class="text-4xl font-bold mb-6">
                Pourquoi Nyonu ?
            </h2>

            <p class="text-white text-xl mb-6">
                Parce que nos modèles existent déjà. Ils sont dans notre histoire, notre culture et notre quotidien. Nyonu valorise le leadership féminin béninois et montre que l’autonomisation commence par la connaissance de son identité.
            </p>
        </div>
    </section>
  
    {{-- Animation personnalisée --}}
    <style>
        @keyframes scroll-left {
        0% {
            transform: translateX(0);
        }
        100% {
            transform: translateX(-50%);
        }
        }

        .animate-scroll-left {
        display: flex;
        width: 200%;
        animation: scroll-left 25s linear infinite;
        }

    </style>



  <script>
    (function () {
        const questionEl = document.getElementById("game-question");
        const optionsEl = document.getElementById("game-options");
        const feedbackEl = document.getElementById("game-feedback");
        const nextBtn = document.getElementById("game-next");
        const progressLabel = document.getElementById("game-progress-label");
        const progressBar = document.getElementById("game-progress-bar");
        const xpEl = document.getElementById("game-xp");
        const streakEl = document.getElementById("game-streak");
        const resultEl = document.getElementById("game-result");
        const scoreLineEl = document.getElementById("game-score-line");
        const gameStatusEl = document.getElementById("game-status");
        const gameReviewListEl = document.getElementById("game-review-list");
        const downloadBtn = document.getElementById("download-certificate");
        const restartBtn = document.getElementById("restart-game");
        const cardEl = document.getElementById("game-card");

        if (!questionEl || !optionsEl || !nextBtn || !progressLabel || !progressBar || !xpEl || !streakEl || !resultEl || !scoreLineEl || !gameStatusEl || !gameReviewListEl || !downloadBtn || !restartBtn || !cardEl) return;

        const badges = {
            kidjo: { label: "Badge Influence Culturelle", desc: "Tu inspires par la communication et le rayonnement culturel.", classes: "text-[#7a1f8a] border-[#d9b3de] bg-white" },
            hangbe: { label: "Badge Courage Stratégique", desc: "Tu avances avec audace et assumes des décisions fortes.", classes: "text-[#8a1f47] border-[#e5bfd0] bg-white" },
            gbedo: { label: "Badge Justice et Dialogue", desc: "Tu privilégies l'équité, l'écoute et la cohésion sociale.", classes: "text-[#1f5a8a] border-[#bfd8eb] bg-white" },
            aurelie: { label: "Badge Innovation Numérique", desc: "Tu modernises les systèmes grâce aux outils numériques.", classes: "text-[#1f7a5f] border-[#bfe6da] bg-white" },
            borna: { label: "Badge Vision Institutionnelle", desc: "Tu structures les actions avec une vision long terme.", classes: "text-[#5f4b1f] border-[#e7dabf] bg-white" },
            yarigo: { label: "Badge Excellence et Discipline", desc: "Tu progresses avec rigueur, constance et résilience.", classes: "text-[#8a4a1f] border-[#edcfb8] bg-white" }
        };

        const quizData = [
            {
                question: "Selon Nyɔnu, quelle est la meilleure définition du leadership féminin ?",
                options: [
                    { text: "Guider, inspirer et transmettre des valeurs humaines", correct: true, profile: "general", why: "Le leadership féminin est vu comme une influence porteuse de sens et de transmission." },
                    { text: "Diriger uniquement par l'autorité", correct: false, profile: "general", why: "Nyɔnu insiste sur l'influence positive et non l'autorité stricte." },
                    { text: "Chercher un poste élevé sans impact collectif", correct: false, profile: "general", why: "L'impact collectif et la transformation sont essentiels." }
                ]
            },
            {
                question: "Comment Nyɔnu relie la culture béninoise au leadership féminin ?",
                options: [
                    { text: "En montrant que les valeurs et traditions locales inspirent des femmes leaders modernes", correct: true, profile: "general", why: "La culture sert de fondation pour guider et inspirer." },
                    { text: "En rejetant les traditions pour suivre uniquement la modernité", correct: false, profile: "general", why: "Nyɔnu valorise tradition et modernité ensemble." },
                    { text: "En comparant le Bénin à d'autres pays", correct: false, profile: "general", why: "Le site est centré sur la culture béninoise, pas sur des comparaisons." }
                ]
            },
            {
                question: "Quelle figure est associée à l'innovation numérique et à la modernisation des services publics ?",
                options: [
                    { text: "Aurélie Adam Soulé", correct: true, profile: "aurelie", why: "Elle incarne l’innovation numérique et la transformation institutionnelle." },
                    { text: "Marie-Élise Gbèdo", correct: false, profile: "gbedo", why: "Elle est plutôt liée à la justice et aux droits humains." },
                    { text: "Tassi Hangbè", correct: false, profile: "hangbe", why: "Il représente le courage et le leadership historique." }
                ]
            },
            {
                question: "Marie-Élise Gbèdo est surtout associée à :",
                options: [
                    { text: "Justice, droits humains et dialogue", correct: true, profile: "gbedo", why: "Son profil met l’accent sur l’éthique et le dialogue." },
                    { text: "Modernisation digitale et technologie", correct: false, profile: "aurelie", why: "Cela correspond à Aurélie Adam Soulé." },
                    { text: "Discipline et performance sportive", correct: false, profile: "yarigo", why: "Ces qualités sont associées à Noëlie Yarigo." }
                ]
            },
            {
                question: "Noëlie Yarigo est associée à quelles qualités principales ?",
                options: [
                    { text: "Discipline, constance et performance", correct: true, profile: "yarigo", why: "Ces qualités sont directement mentionnées dans le site." },
                    { text: "Courage et autorité historique", correct: false, profile: "hangbe", why: "Ces qualités sont celles de Tassi Hangbè." },
                    { text: "Innovation et modernisation", correct: false, profile: "aurelie", why: "Ces valeurs correspondent à Aurélie Adam Soulé." }
                ]
            },
            {
                question: "Claude Borna est présenté sur Nyɔnu comme :",
                options: [
                    { text: "Un leader stratégique et un transformateur institutionnel", correct: true, profile: "borna", why: "Il incarne structuration et vision à long terme." },
                    { text: "Une artiste et musicienne reconnue", correct: false, profile: "kidjo", why: "Cela correspond à Angélique Kidjo." },
                    { text: "Un sportif courageux", correct: false, profile: "yarigo", why: "Cela correspond à Noëlie Yarigo." }
                ]
            },
            {
                question: "Quel est le rôle principal du leadership féminin selon Nyɔnu ?",
                options: [
                    { text: "Valoriser l’histoire, les valeurs et l’impact des femmes béninoises", correct: true, profile: "general", why: "Le site met l’accent sur inspiration et transmission." },
                    { text: "Classer les femmes selon leur réussite", correct: false, profile: "general", why: "Le site valorise, il ne classe pas." },
                    { text: "Offrir du divertissement uniquement", correct: false, profile: "general", why: "Le contenu a un but éducatif et d’orientation." }
                ]
            },
            {
                question: "Quel type de leadership est généralement le moins compatible avec l’autonomisation ?",
                options: [
                    { text: "Transformateur", correct: false, profile: "general", why: "Le leadership transformateur favorise l'autonomisation, car il inspire et soutient les autres." },
                    { text: "Autoritaire / directif", correct: true, profile: "general", why: "Le leadership autoritaire centralise le pouvoir et limite l'autonomie des membres de l'équipe." },
                    { text: "Participatif", correct: false, profile: "general", why: "Le leadership participatif encourage l'implication et l'autonomisation des membres." }
                ]
            },
            {
                question: "L’autonomisation dans une équipe signifie :",
                options: [
                    { text: "Que le leader ne donne jamais d’instructions", correct: false, profile: "general", why: "L'autonomisation n'exclut pas la guidance ; il s'agit de donner les moyens d'agir et de contribuer." },
                    { text: "Que chaque membre a les moyens de contribuer activement", correct: true, profile: "general", why: "L'autonomisation permet aux membres d'apporter leurs idées et d'agir de manière proactive." },
                    { text: "Que les décisions doivent toujours être centralisées", correct: false, profile: "general", why: "Centraliser les décisions va à l'encontre de l'autonomisation." }
                ]
            }
        ];

        const PASS_SCORE = 7;
        const POINTS_PER_GOOD_ANSWER = 10;
        let current = 0;
        let score = 0;
        let xp = 0;
        let streak = 0;
        let answered = false;
        let userAnswers = [];
        const profileScores = { kidjo: 0, hangbe: 0, gbedo: 0, aurelie: 0, borna: 0, yarigo: 0 };
        let finalBadgeKey = "borna";
        let finalUserName = "Internaute";

        function shuffleOptions(options) {
            const shuffled = [...options];
            for (let i = shuffled.length - 1; i > 0; i -= 1) {
                const j = Math.floor(Math.random() * (i + 1));
                const tmp = shuffled[i];
                shuffled[i] = shuffled[j];
                shuffled[j] = tmp;
            }
            return shuffled;
        }

        function inferProfileFromSynthesis() {
            const text = ((document.getElementById("quiz-result-text") || {}).textContent || "").toLowerCase();
            if (!text) return null;
            if (text.includes("aurelie")) return "aurelie";
            if (text.includes("kidjo")) return "kidjo";
            if (text.includes("hangbe")) return "hangbe";
            if (text.includes("gbedo")) return "gbedo";
            if (text.includes("yarigo")) return "yarigo";
            if (text.includes("borna")) return "borna";
            return null;
        }

        function getUserFullName() {
            const first = ((document.getElementById("quiz-firstname") || {}).value || "").trim();
            const last = ((document.getElementById("quiz-lastname") || {}).value || "").trim();
            return `${first} ${last}`.trim() || "Internaute";
        }

        function updateHeader() {
            const total = quizData.length;
            const step = Math.min(current + 1, total);
            progressLabel.textContent = `Question ${step}/${total}`;
            progressBar.style.width = `${(step / total) * 100}%`;
            xpEl.textContent = String(xp);
            streakEl.textContent = String(streak);
        }

        function renderQuestion() {
            updateHeader();
            answered = false;
            feedbackEl.classList.add("hidden");
            nextBtn.classList.add("hidden");
            const q = quizData[current];
            questionEl.textContent = q.question;
            optionsEl.innerHTML = "";

            const randomizedOptions = shuffleOptions(q.options);
            randomizedOptions.forEach((opt) => {
                const btn = document.createElement("button");
                btn.type = "button";
                btn.className = "text-left border border-[#e9d6ea] rounded-xl px-4 py-3 hover:border-[#ba06bf] hover:bg-[#fff5ff] transition";
                btn.textContent = opt.text;
                btn.dataset.correct = opt.correct ? "1" : "0";
                btn.addEventListener("click", () => handleAnswer(btn, opt));
                optionsEl.appendChild(btn);
            });
        }

        function handleAnswer(selectedBtn, option) {
            if (answered) return;
            answered = true;

            Array.from(optionsEl.children).forEach((child) => {
                child.disabled = true;
                child.classList.add("opacity-70");
            });

            const isCorrect = !!option.correct;
            const gainedPoints = isCorrect ? POINTS_PER_GOOD_ANSWER : 0;
            const correctOption = quizData[current].options.find((opt) => opt.correct);
            userAnswers[current] = {
                question: quizData[current].question,
                selected: option.text,
                correct: isCorrect,
                correctText: correctOption ? correctOption.text : "",
                gainedPoints
            };

            if (isCorrect) {
                streak += 1;
                score += 1;
                xp += gainedPoints;
                selectedBtn.classList.add("border-[#ba06bf]", "bg-[#fdf2ff]", "opacity-100");
            } else {
                streak = 0;
                selectedBtn.classList.add("border-[#ba06bf]", "bg-[#fdf2ff]", "opacity-100");
            }

            profileScores[option.profile] += isCorrect ? 2 : 1;
            updateHeader();
            nextBtn.textContent = current < quizData.length - 1 ? "Question suivante" : "Voir mon résultat";
            nextBtn.classList.remove("hidden");
        }

        function finishGame() {
            cardEl.classList.add("hidden");
            resultEl.classList.remove("hidden");
            finalUserName = getUserFullName();
            const passed = score >= PASS_SCORE;

            finalBadgeKey = Object.keys(profileScores).sort((a, b) => profileScores[b] - profileScores[a])[0] || "borna";
            const inferred = inferProfileFromSynthesis();
            let synthesisBonus = 0;
            if (passed && inferred && inferred === finalBadgeKey) {
                synthesisBonus = 15;
                xp += synthesisBonus;
            }

            const badge = badges[finalBadgeKey] || badges.borna;
            const percent = Math.round((score / quizData.length) * 100);
            scoreLineEl.textContent = `${finalUserName}, score: ${score}/${quizData.length} (${percent}%) | XP total: ${xp}`;
            gameStatusEl.className = `mt-2 text-xl font-medium ${passed ? "text-green-700" : "text-red-700"}`;
            gameStatusEl.textContent = passed
                ? "Examen validé: tu as atteint le seuil minimum de 7/10."
                : "Tu n'as pas validé l'examen: il faut au moins 7/10 pour obtenir le certificat.";

            if (passed) {
                downloadBtn.classList.remove("hidden");
            } else {
                downloadBtn.classList.add("hidden");
            }

            gameReviewListEl.innerHTML = userAnswers
                .map((answer, index) => {
                    const lineClass = answer.correct ? "text-green-700" : "text-red-700";
                    return `<li class="rounded-lg border border-[#f0e3f2] p-3">
                        <p class="font-semibold text-gray-800">Q${index + 1}. ${answer.question}</p>
                        <p class="${lineClass}">Ta réponse: ${answer.selected}</p>
                        <p class="text-gray-700">Bonne réponse: ${answer.correctText}</p>
                        <p class="text-[#760e79] font-medium">Points gagnés: +${answer.gainedPoints}</p>
                    </li>`;
                })
                .join("");
            updateHeader();
        }

        function restartGame() {
            current = 0;
            score = 0;
            xp = 0;
            streak = 0;
            userAnswers = [];
            Object.keys(profileScores).forEach((key) => { profileScores[key] = 0; });
            resultEl.classList.add("hidden");
            cardEl.classList.remove("hidden");
            gameStatusEl.textContent = "";
            gameReviewListEl.innerHTML = "";
            downloadBtn.classList.remove("hidden");
            renderQuestion();
        }

        nextBtn.addEventListener("click", function () {
            if (current < quizData.length - 1) {
                current += 1;
                renderQuestion();
            } else {
                finishGame();
            }
        });

        restartBtn.addEventListener("click", restartGame);

        downloadBtn.addEventListener("click", async function () {
            const safeNamePart = finalUserName
                .normalize("NFD")
                .replace(/[\u0300-\u036f]/g, "")
                .replace(/[^a-zA-Z0-9]+/g, "_")
                .replace(/^_+|_+$/g, "") || "Internaute";
            const certFileName = `Certificat_${safeNamePart}`;

            const persisted = window.LAST_LEADERSHIP_ASSESSMENT || null;
            if (persisted && persisted.id && persisted.certificate_token) {
                const certBase = window.LEADERSHIP_CERTIFICATE_BASE || "/api/leadership/synthesis";
                const certUrl = `${certBase}/${persisted.id}/certificate?token=${encodeURIComponent(persisted.certificate_token)}`;

                const originalLabel = downloadBtn.textContent;
                downloadBtn.disabled = true;
                downloadBtn.textContent = "Génération du PDF...";

                try {
                    const response = await fetch(certUrl, { method: "GET" });
                    if (!response.ok) {
                        const data = await response.json().catch(() => ({}));
                        const reason = data.error || `Erreur HTTP ${response.status}`;
                        throw new Error(reason);
                    }

                    const blob = await response.blob();
                    const objectUrl = URL.createObjectURL(blob);
                    const a = document.createElement("a");
                    a.href = objectUrl;
                    a.download = `${certFileName}.pdf`;
                    document.body.appendChild(a);
                    a.click();
                    a.remove();
                    URL.revokeObjectURL(objectUrl);
                    return;
                } catch (error) {
                    const message = error && error.message ? error.message : "Impossible de télécharger le certificat.";
                    alert(`Téléchargement échoué: ${message}`);
                } finally {
                    downloadBtn.disabled = false;
                    downloadBtn.textContent = originalLabel;
                }
            }

            const now = new Date();
            const dateText = now.toLocaleDateString("fr-FR");
            const badgeText = (badges[finalBadgeKey] || badges.borna).label;
            const html = `<!doctype html><html><head><meta charset="utf-8"><title>Certificat Leadership</title>
            <style>body{font-family:Arial,sans-serif;background:#f8f1fa;padding:24px} .card{max-width:760px;margin:0 auto;background:#fff;border:2px solid #e6d1e9;border-radius:16px;padding:32px}
            h1{color:#760e79;margin-bottom:8px} .badge{display:inline-block;padding:8px 14px;border-radius:999px;border:1px solid #ba06bf;color:#760e79;font-weight:700} p{color:#222;line-height:1.5}</style></head><body>
            <div class="card"><h1>Certificat de Leadership Nyonu</h1><p>Ce document certifie que <strong>${finalUserName}</strong> a complété l'évaluation gamifiée Nyonu.</p>
            <p><span class="badge">${badgeText}</span></p><p>Score final: <strong>${score}/${quizData.length}</strong> | XP total: <strong>${xp}</strong></p>
            <p>Date: ${dateText}</p><p>Continue à transformer ton potentiel en impact concret pour ta communauté.</p></div></body></html>`;
            const blob = new Blob([html], { type: "text/html;charset=utf-8" });
            const url = URL.createObjectURL(blob);
            const a = document.createElement("a");
            a.href = url;
            a.download = `${certFileName}.html`;
            document.body.appendChild(a);
            a.click();
            a.remove();
            URL.revokeObjectURL(url);
        });

        renderQuestion();
    })();
  </script>

@endsection




