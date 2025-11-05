<!DOCTYPE html>
<html lang="es">
    <head>
        <title> @yield('title') </title>
        <!-- Primary Meta Tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="title" content="Proyecto PLANCLIMAC2" />
        <meta name="description" content="Un proyecto COFINANCIADO AL 85% con fondos FEDER y cuyo presupuesto asciende hasta 3.045.442,75 €.  Nos hemos enmarcado en este reto de cambio climatico bajo la PRIORIDAD 2 - MAC VERDE - Transición ecológica, apoyo al desarrollo de una economía verde y azul, lucha contra el cambio climático, prevención y gestion de riesgos y emergencias durante los 48 meses de ejecución del proyecto 2025-2028." />


        <!-- Open Graph / Facebook -->
        <meta property="og:type" content="website" />
        <meta property="og:url" content="https://proyectoplanclimac2.org" />
        <meta property="og:title" content="Proyecto PLANCLIMAC2" />
        <meta property="og:description" content="Un proyecto COFINANCIADO AL 85% con fondos FEDER y cuyo presupuesto asciende hasta 3.045.442,75 €.  Nos hemos enmarcado en este reto de cambio climatico bajo la PRIORIDAD 2 - MAC VERDE - Transición ecológica, apoyo al desarrollo de una economía verde y azul, lucha contra el cambio climático, prevención y gestion de riesgos y emergencias durante los 48 meses de ejecución del proyecto 2025-2028." />
        <meta property="og:site_name" content="Proyecto PLANCLIMAC2" />
        <meta property="og:determiner" content="auto" />
        <meta property="og:image" content="/images/PLANCLIMAC2.png" />
        <meta property="og:image:type" content="image/png" />
        <meta property="og:image:alt" content="Proyecto PLANCLIMAC2" />
        <meta property="og:image:width" content="828" />
        <meta property="og:image:height" content="828" />
        <!-- Twitter -->
        <meta property="twitter:card" content="summary_large_image" />
        <meta property="twitter:url" content="https://proyectoplanclimac2.org" />
        <meta property="twitter:title" content="Proyecto PLANCLIMAC2" />
        <meta property="twitter:description" content="Un proyecto COFINANCIADO AL 85% con fondos FEDER y cuyo presupuesto asciende hasta 3.045.442,75 €.  Nos hemos enmarcado en este reto de cambio climatico bajo la PRIORIDAD 2 - MAC VERDE - Transición ecológica, apoyo al desarrollo de una economía verde y azul, lucha contra el cambio climático, prevención y gestion de riesgos y emergencias durante los 48 meses de ejecución del proyecto 2025-2028." />
        <meta property="twitter:image" content="/images/PLANCLIMAC2.png" />
        <meta property="twitter:image" content="Proyecto PLANCLIMAC2" />

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="/build/assets/app.css">
        <link rel="icon" href="{{ asset('favicon.ico') }}">

    </head>
    <body class="font-sans antialiased dark:bg-black dark:text-white/50">
        <main class="p-2 md:p-8">
            <x-header/>

            @yield('content')
        </main>
        <div class="fixed bottom-10 right-4 z-50" id="lang-btn">
            <div class="relative">
                <div id="languageMenu" class="absolute bottom-12 right-0 w-40 bg-white rounded-xl shadow-lg hidden">
                    <button onclick="setLanguage('es')" class="block w-full text-left px-4 py-2 hover:bg-gray-100" command="show-loader" commandfor="loader">Español</button>
                    <button onclick="setLanguage('pt')" class="block w-full text-left px-4 py-2 hover:bg-gray-100" command="show-loader" commandfor="loader">Português</button>
                    <button onclick="setLanguage('en')" class="block w-full text-left px-4 py-2 hover:bg-gray-100" command="show-loader" commandfor="loader">English</button>
                    <button onclick="setLanguage('fr')" class="block w-full text-left px-4 py-2 hover:bg-gray-100" command="show-loader" commandfor="loader">Français</button>
                </div>
                <button onclick="toggleMenu()" class="bg-blue-600 text-white px-4 py-2 rounded-xl shadow-lg hover:bg-blue-700 focus:outline-none">
                    <div data-container="translator">
                        <p data-lang="es">
                            🌐 Idioma
                        </p>
                        <p class="hidden" data-lang="pt">
                            🌐 Idioma
                        </p>
                        <p class="hidden" data-lang="en">
                            🌐 Language
                        </p>
                        <p class="hidden" data-lang="fr">
                            🌐 Langue
                        </p>
                    </div>
                </button>
            </div>
        </div>
        <x-footer/>
        <script>
            let userLang = localStorage.getItem('lang') || 'es';

            function toggleMenu() {
                const menu = document.getElementById('languageMenu');
                menu.classList.toggle('hidden');
            }
            async function setLanguage(lang) {
                if(userLang == lang){ return }

                const allHTMLTags = document.querySelectorAll('*[data-container="translator"]');
                
                for (const tag of allHTMLTags) {
                    let children = tag.querySelectorAll(`:scope > *`);
                    for (const child of children) {
                        child.classList.add('hidden');
                    }
                    let chilToDisplay = tag.querySelector(`[data-lang=${lang}]`);
                    chilToDisplay.classList.remove('hidden');
                }
                document.getElementById('languageMenu').classList.add('hidden');
                localStorage.setItem('lang', lang);
                userLang = lang;
            }

            // Ocultar menú si se hace clic fuera
            document.addEventListener('click', function(event) {
                const menu = document.getElementById('languageMenu');
                const isClickInside = event.target.closest('#languageMenu') || event.target.closest('button');
                if (!isClickInside) {
                    menu.classList.add('hidden');
                }
            });

            const allHTMLTags = document.querySelectorAll('*[data-container="translator"]');
            for (const tag of allHTMLTags) {
                let children = tag.querySelectorAll(`:scope > *`);
                for (const child of children) {
                    child.classList.add('hidden');
                }
                let chilToDisplay = tag.querySelector(`[data-lang=${userLang}]`);
                chilToDisplay.classList.remove('hidden');
            }
            document.getElementById('languageMenu').classList.add('hidden');
        </script>
    </body>
</html>
