<div class="w-full">
    <nav class="flex flex-col lg:flex-row justify-between items-center w-full sm:w-10/12 bg-white mt-4 mx-0 sm:mx-auto">
        <div class="w-full lg:w-1/2 flex items-center max-w-full">
            <button id="menu-button" type="button" class="w-8 h-8 block text-gray-500 hover:text-white focus:text-white focus:outline-none sm:hidden flex flex-col space-around">
                <svg class="w-8 h-8 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 6H6m12 4H6m12 4H6m12 4H6"/>
                </svg>
            </button>
            <!-- <x-Logo /> -->
            <img 
                src="/images/LOGO_HORIZONTAL.png" 
                alt="Interreg MAC - PROYECTO PLANCLIMAC2" 
                class="max-h-28 mx-auto max-w-72 sm:max-w-full"
            />
        </div>
        <div class="w-full lg:w-1/2 ">
            <ul id="nav-links" class="flex flex-col w-full h-full sm:flex-row justify-between gap-1">
                <x-NavLink
                    href="/"
                    active="{{ Request::is('/') }}"
                >
                    PLANCLIMAC2
                </x-NavLink>

                <x-NavLink
                    href="/news"
                    active="{{ Request::is('news/*') || Request::is('news') }}"
                >
                    Noticias
                </x-NavLink>
                <x-NavLink
                    href="/statistics"
                    active="{{ Request::is('statistics/*') || Request::is('statistics') }}"
                >
                    Estadísticas
                </x-NavLink>
                <x-NavLink
                    href="/results"
                    active="{{ Request::is('results/*') || Request::is('results') }}"
                >
                    Resultados
                </x-NavLink>

                <x-NavLink
                    href="/contact"
                    active="{{ Request::is('contact/*') || Request::is('contact') }}"
                >
                    Contacto
                </x-NavLink>
            </ul>
        </div> 
    </nav>
</div>


<script>
    let navLinks = document.querySelector('#nav-links');
    let menuButton = document.querySelector('#menu-button');
    menuButton.addEventListener('click', () => {
        navLinks.classList.toggle('hidden');
    })
    window.addEventListener('resize', () => {
        if(window.innerWidth < 640){
            navLinks.classList.add('hidden');
            menuButton.classList.remove('hidden');
        }
        if(window.innerWidth > 640){
            navLinks.classList.remove('hidden');
            menuButton.classList.add('hidden');
        }
    })
</script>