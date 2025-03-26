<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title> @yield('title') </title>
        <!-- Primary Meta Tags -->
        <meta name="title" content="Proyecto PLANCLIMAC2" />
        <meta name="description" content="Un proyecto COFINANCIADO AL 85% con fondos FEDER y cuyo presupuesto asciende hasta 3.045.442,75 €.  Nos hemos enmarcado en este reto de cambio climatico bajo la PRIORIDAD 2 - MAC VERDE - Transición ecológica, apoyo al desarrollo de una economía verde y azul, lucha contra el cambio climático, prevención y gestion de riesgos y emergencias durante los 48 meses de ejecución del proyecto 2025-2028." />

        <!-- Open Graph / Facebook -->
        <meta property="og:type" content="website" />
        <meta property="og:url" content="https://proyectoplanclimac2.org" />
        <meta property="og:title" content="Proyecto PLANCLIMAC2" />
        <meta property="og:description" content="Un proyecto COFINANCIADO AL 85% con fondos FEDER y cuyo presupuesto asciende hasta 3.045.442,75 €.  Nos hemos enmarcado en este reto de cambio climatico bajo la PRIORIDAD 2 - MAC VERDE - Transición ecológica, apoyo al desarrollo de una economía verde y azul, lucha contra el cambio climático, prevención y gestion de riesgos y emergencias durante los 48 meses de ejecución del proyecto 2025-2028." />
        <meta property="og:image" content="/images/PLANCLIMAC2.png" />
        <meta property="og:image:width" content="828" />
        <meta property="og:image:height" content="828" />
        <meta property="og:site_name" content="Proyecto PLANCLIMAC2" />

        <!-- Twitter -->
        <meta property="twitter:card" content="summary_large_image" />
        <meta property="twitter:url" content="https://proyectoplanclimac2.org" />
        <meta property="twitter:title" content="Proyecto PLANCLIMAC2" />
        <meta property="twitter:description" content="Un proyecto COFINANCIADO AL 85% con fondos FEDER y cuyo presupuesto asciende hasta 3.045.442,75 €.  Nos hemos enmarcado en este reto de cambio climatico bajo la PRIORIDAD 2 - MAC VERDE - Transición ecológica, apoyo al desarrollo de una economía verde y azul, lucha contra el cambio climático, prevención y gestion de riesgos y emergencias durante los 48 meses de ejecución del proyecto 2025-2028." />
        <meta property="twitter:image" content="/images/PLANCLIMAC2.png" />

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <x-styles-imports/>
    </head>
    <body class="font-sans antialiased dark:bg-black dark:text-white/50 p-8">
        <main @class([
            'flex flex-col row-start-2 items-center sm:items-start bg-no-repeat	w-full',
            "bg-[url('/images/HERO.jpg')] bg-cover	h-[720px]" => Request::is('/')
            ])>
            <x-header/>
            <div @class([
                    "h-full md:ml-10 w-full md:max-w-1/2 md:w-1/2" => Request::is('/'),
                    "hidden" => !Request::is('/')

                ])>
                <x-description/>
            </div>
        </main>
        @yield('content')
        <x-footer/>
    </body>
</html>
