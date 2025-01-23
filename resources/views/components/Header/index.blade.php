<nav class="flex flex-col lg:flex-row justify-between items-center w-full bg-white mt-4">
    <div class="w-full lg:w-1/2">
        <x-Logo />
    </div>
    <div class="w-full lg:w-1/2 ">
        <ul class="flex flex-col w-full h-full sm:flex-row justify-between gap-1">
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