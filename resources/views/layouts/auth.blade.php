<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'SkillMatchr')</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="icon" type="image/png" sizes="64x64" href="{{ asset('images/favicon.png') }}">


</head>
<body  class="bg-white text-gray-800 font-[Goli] text-lg">

    {{-- Header --}}
   <header id="main-header" 
        class="fixed top-0 left-0 w-full flex justify-between items-center px-10 py-5 bg-white/90 backdrop-blur-md z-50 transition-all duration-300">
        <div class="flex items-center space-x-3">
            <img src="{{ asset('images/SMlogo.png') }}" alt="SkillMatchr logo" class="w-auto h-16">
        </div>
        <nav class="space-x-6">
            <a href="/" class="text-gray-600 hover:text-blue-600">Accueil</a>
            <a href="/#fonctionnalites" class="text-gray-600 hover:text-blue-600">Fonctionnalités</a>
            <a href="/#apropos" class="text-gray-600 hover:text-blue-600">Notre approche</a>
            <a href="/register" class="text-gray-600 hover:text-blue-600">S'inscrire</a>
            <a href="/sign_in" class="text-gray-600 hover:text-blue-600">Connexion</a>   
        </nav>
    </header>


    <main>
        @yield('content')
    </main>

     {{-- Footer --}}
    <footer class="bg-[#f0f4fd] pt-16 pb-8">
        <div class="max-w-7xl mx-auto px-8 grid grid-cols-1 md:grid-cols-4 gap-12">

            <!-- Logo + description -->
            <div>
            <div class="flex items-center gap-2 mb-4">
                 <img src="{{ asset('images/SMlogo.png') }}" alt="SkillMatchr logo" class="w-auto h-16">
            </div>
            <p class="text-gray-600 mb-6">
               SkillMatchr te guide vers la formation idéale, adaptée à ton parcours, ton expérience et tes ambitions.
            </p>
            <div class="flex gap-3">
                <a href="https://www.facebook.com/stecy.lahitan.50" class="w-10 h-10 bg-blue-100 text-blue-600 rounded-full flex items-center justify-center hover:bg-blue-600 hover:text-white transition"><i data-lucide="facebook"></i></a>            
                <a href="https://www.linkedin.com/in/st%C3%A9cy-lahitan-41580826b/" class="w-10 h-10 bg-blue-100 text-blue-600 rounded-full flex items-center justify-center hover:bg-blue-600 hover:text-white transition"><i data-lucide="linkedin"></i></a>
                <a href="https://www.instagram.com/stecy_lah/" class="w-10 h-10 bg-blue-100 text-blue-600 rounded-full flex items-center justify-center hover:bg-blue-600 hover:text-white transition"><i data-lucide="instagram"></i></a>
            </div>
            </div>

            <!-- Liens -->
            <div>
            <h3 class="text-lg font-semibold text-gray-900 mb-4">Liens</h3>
            <ul class="space-y-3 text-gray-600">
                <li><a href="#" class="text-gray-600 hover:text-blue-600">Accueil</a></li>
                <li><a href="#" class="text-gray-600 hover:text-blue-600">Fonctionnalités</a></li>
                <li><a href="#" class="text-gray-600 hover:text-blue-600">À propos</a></li>
                <li><a href="#" class="text-gray-600 hover:text-blue-600">S'inscrire</a></li>
                <li><a href="#" class="text-gray-600 hover:text-blue-600">Connexion</a></li>
            </ul>
            </div>

            <!-- Ressources -->
            <div>
            <h3 class="text-lg font-semibold text-gray-900 mb-4">Ressources</h3>
            <ul class="space-y-3 text-gray-600">
                <li><a href="#" class="hover:text-blue-600 transition">Trouver une formation</a></li>
                <li><a href="#" class="hover:text-blue-600 transition">Guides et conseils carrière</a></li>
                <li><a href="#" class="hover:text-blue-600 transition">CV & Profil professionnel</a></li>
                <li><a href="#" class="hover:text-blue-600 transition">Aide et support</a></li>
                <li><a href="#" class="hover:text-blue-600 transition">Blog SkillMatchr</a></li>
            </ul>
            </div>


            <!-- Contact -->
            <div>
            <h3 class="text-lg font-semibold text-gray-900 mb-4">Contact</h3>
            <p class="text-gray-600 mb-2">+229 01 69 38 45 41</p>
            <p class="text-gray-600 mb-2">lahitanstecy@gmail.com</p>
            <p class="text-gray-600 mb-4">Cotonou, Bénin</p>
            <div class="w-full h-28 bg-gray-200 rounded-lg flex items-center justify-center text-gray-500 text-sm">
                Carte intégrée
            </div>
            </div>
        </div>

        <!-- Bas du footer -->
        <div class="border-t border-gray-200 mt-12 pt-6 text-center text-gray-500 text-sm">
           <p>Design & Développement réalisés par <span class="text-blue-600 font-medium">Stécy LAHITAN</span> — © 2025 <span class="text-blue-600 font-medium">SkillMatchr</span>.</p>
        </div>
    </footer>


    <script src="https://unpkg.com/lucide@latest"></script>
    <script>
        lucide.createIcons();
    </script>

</body>
</html>
