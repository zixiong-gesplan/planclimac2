<header class="fixed left-1/2 top-3 z-50 w-[calc(100%-1rem)] max-w-7xl -translate-x-1/2 md:top-6 md:w-[calc(100%-4rem)]">
    <nav
        id="main-navbar"
        data-home-page="{{ Request::is('/') ? 'true' : 'false' }}"
        aria-label="Navegación principal"
        @class([
            'flex flex-wrap items-center justify-between gap-x-8 rounded-2xl px-4 py-3 transition-all duration-300 sm:px-6',
            'bg-transparent shadow-none ring-0' => Request::is('/'),
            'bg-white shadow-lg ring-1 ring-slate-200/80' => !Request::is('/'),
        ])
    >
        <a href="/" class="inline-flex min-h-12 items-center rounded-lg focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-sky-800" aria-label="PLANCLIMAC2, inicio">
            <img
                src="{{ asset('images/LOGO_HORIZONTAL.png') }}"
                alt="PLANCLIMAC2"
                width="996"
                height="200"
                class="h-10 w-auto max-w-[min(68vw,15rem)] object-contain sm:h-12"
            >
        </a>

        <button
            id="menu-button"
            type="button"
            class="inline-flex h-12 w-12 items-center justify-center rounded-xl text-sky-950 transition hover:bg-sky-50 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-sky-800 sm:hidden"
            aria-controls="nav-links"
            aria-expanded="false"
            aria-label="Abrir menú de navegación"
        >
            <svg class="h-7 w-7" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
            </svg>
        </button>

        <div id="nav-links" class="hidden w-full border-t border-slate-100 pt-3 sm:block sm:w-auto sm:border-0 sm:pt-0">
            <ul class="flex flex-col gap-1 sm:flex-row sm:items-center sm:gap-1">
                <x-NavLink href="/" active="{{ Request::is('/') }}">
                    <span data-container="translator">
                        <span data-lang="es">Inicio</span>
                        <span class="hidden" data-lang="pt">Início</span>
                        <span class="hidden" data-lang="en">Home</span>
                        <span class="hidden" data-lang="fr">Accueil</span>
                    </span>
                </x-NavLink>

                <x-NavLink href="/news" active="{{ Request::is('news/*') || Request::is('news') }}">
                    <span data-container="translator">
                        <span data-lang="es">Noticias</span>
                        <span class="hidden" data-lang="pt">Notícias</span>
                        <span class="hidden" data-lang="en">News</span>
                        <span class="hidden" data-lang="fr">Actualités</span>
                    </span>
                </x-NavLink>

                <x-NavLink href="/statistics" active="{{ Request::is('statistics/*') || Request::is('statistics') }}">
                    <span data-container="translator">
                        <span data-lang="es">Estadísticas</span>
                        <span class="hidden" data-lang="pt">Estatísticas</span>
                        <span class="hidden" data-lang="en">Statistics</span>
                        <span class="hidden" data-lang="fr">Statistiques</span>
                    </span>
                </x-NavLink>

                <x-NavLink href="/results" active="{{ Request::is('results/*') || Request::is('results') }}">
                    <span data-container="translator">
                        <span data-lang="es">Resultados</span>
                        <span class="hidden" data-lang="pt">Resultados</span>
                        <span class="hidden" data-lang="en">Results</span>
                        <span class="hidden" data-lang="fr">Résultats</span>
                    </span>
                </x-NavLink>

                <x-NavLink href="/contact" active="{{ Request::is('contact/*') || Request::is('contact') }}">
                    <span data-container="translator">
                        <span data-lang="es">Contacto</span>
                        <span class="hidden" data-lang="pt">Contato</span>
                        <span class="hidden" data-lang="en">Contact</span>
                        <span class="hidden" data-lang="fr">Contact</span>
                    </span>
                </x-NavLink>
            </ul>
        </div>
    </nav>
</header>

<script>
    (() => {
        const menuButton = document.querySelector('#menu-button');
        const navLinks = document.querySelector('#nav-links');
        const navbar = document.querySelector('#main-navbar');

        if (!menuButton || !navLinks || !navbar) return;

        const mobileViewport = window.matchMedia('(max-width: 639px)');

        const updateNavbarSurface = () => {
            const menuIsOpen = menuButton.getAttribute('aria-expanded') === 'true';
            const shouldBeSolid = navbar.dataset.homePage !== 'true' || window.scrollY > 16 || menuIsOpen;

            navbar.classList.toggle('bg-white', shouldBeSolid);
            navbar.classList.toggle('shadow-lg', shouldBeSolid);
            navbar.classList.toggle('ring-1', shouldBeSolid);
            navbar.classList.toggle('ring-slate-200/80', shouldBeSolid);
            navbar.classList.toggle('bg-transparent', !shouldBeSolid);
            navbar.classList.toggle('shadow-none', !shouldBeSolid);
            navbar.classList.toggle('ring-0', !shouldBeSolid);
        };

        const closeMenu = (restoreFocus = false) => {
            navLinks.classList.add('hidden');
            menuButton.setAttribute('aria-expanded', 'false');
            menuButton.setAttribute('aria-label', 'Abrir menú de navegación');
            updateNavbarSurface();

            if (restoreFocus) menuButton.focus();
        };

        menuButton.addEventListener('click', () => {
            const isExpanded = menuButton.getAttribute('aria-expanded') === 'true';
            navLinks.classList.toggle('hidden', isExpanded);
            menuButton.setAttribute('aria-expanded', String(!isExpanded));
            menuButton.setAttribute('aria-label', isExpanded ? 'Abrir menú de navegación' : 'Cerrar menú de navegación');
            updateNavbarSurface();
        });

        navLinks.addEventListener('click', (event) => {
            if (event.target.closest('a') && mobileViewport.matches) closeMenu();
        });

        document.addEventListener('keydown', (event) => {
            if (event.key === 'Escape' && menuButton.getAttribute('aria-expanded') === 'true') {
                closeMenu(true);
            }
        });

        mobileViewport.addEventListener('change', (event) => {
            if (!event.matches) {
                navLinks.classList.remove('hidden');
                menuButton.setAttribute('aria-expanded', 'false');
                menuButton.setAttribute('aria-label', 'Abrir menú de navegación');
            } else {
                closeMenu();
            }
        });

        window.addEventListener('scroll', updateNavbarSurface, { passive: true });
        updateNavbarSurface();
    })();
</script>
