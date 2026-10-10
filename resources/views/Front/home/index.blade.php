@extends('layouts.app')

@section('title', 'PLANCLIMAC2 (1/MAC/2/2.4/0006)')

@section('content')
<section class="relative left-1/2 -mt-2 min-h-[100svh] w-screen -translate-x-1/2 overflow-hidden bg-sky-950 text-white shadow-xl md:-mt-8">
    <img
        src="{{ asset('images/HERO.jpg') }}"
        alt=""
        width="1600"
        height="1200"
        fetchpriority="high"
        class="absolute inset-0 z-0 h-full w-full object-cover"
    >
    <div class="absolute inset-0 z-10 bg-gradient-to-r from-sky-950/95 via-sky-950/75 to-sky-950/30"></div>

    <div class="relative z-20 flex min-h-[100svh] items-center px-6 py-24 sm:px-10 md:px-14 lg:px-20">
        <div class="max-w-4xl">
            <p class="mb-5 inline-flex rounded-full border border-yellow-300/50 bg-sky-950/40 px-4 py-2 text-xs font-bold uppercase tracking-[0.16em] text-yellow-300 sm:text-sm">
                <span data-container="translator">
                    <span data-lang="es">Proyecto Interreg MAC 2021–2027 · 1/MAC/2/2.4/0006</span>
                    <span class="hidden" data-lang="pt">Projeto Interreg MAC 2021–2027 · 1/MAC/2/2.4/0006</span>
                    <span class="hidden" data-lang="en">Interreg MAC Project 2021–2027 · 1/MAC/2/2.4/0006</span>
                    <span class="hidden" data-lang="fr">Projet Interreg MAC 2021–2027 · 1/MAC/2/2.4/0006</span>
                </span>
            </p>

            <div data-container="translator">
                <h1 class="max-w-4xl text-4xl font-extrabold leading-[1.08] tracking-tight text-white sm:text-5xl md:text-6xl lg:text-7xl" data-lang="es">
                    Preparar la región macaronésica frente al cambio climático
                </h1>
                <h1 class="hidden max-w-4xl text-4xl font-extrabold leading-[1.08] tracking-tight text-white sm:text-5xl md:text-6xl lg:text-7xl" data-lang="pt">
                    Preparar a região macaronésia para as alterações climáticas
                </h1>
                <h1 class="hidden max-w-4xl text-4xl font-extrabold leading-[1.08] tracking-tight text-white sm:text-5xl md:text-6xl lg:text-7xl" data-lang="en">
                    Preparing the Macaronesian region for climate change
                </h1>
                <h1 class="hidden max-w-4xl text-4xl font-extrabold leading-[1.08] tracking-tight text-white sm:text-5xl md:text-6xl lg:text-7xl" data-lang="fr">
                    Préparer la région macaronésienne face au changement climatique
                </h1>
            </div>

            <div data-container="translator">
                <p class="mt-6 max-w-2xl text-base leading-relaxed text-white/90 sm:text-lg md:text-xl" data-lang="es">
                    Investigación y cooperación para comprender los riesgos climáticos y apoyar la adaptación de nuestros territorios.
                </p>
                <p class="hidden mt-6 max-w-2xl text-base leading-relaxed text-white/90 sm:text-lg md:text-xl" data-lang="pt">
                    Investigação e cooperação para compreender os riscos climáticos e apoiar a adaptação dos nossos territórios.
                </p>
                <p class="hidden mt-6 max-w-2xl text-base leading-relaxed text-white/90 sm:text-lg md:text-xl" data-lang="en">
                    Research and cooperation to understand climate risks and support adaptation across our territories.
                </p>
                <p class="hidden mt-6 max-w-2xl text-base leading-relaxed text-white/90 sm:text-lg md:text-xl" data-lang="fr">
                    Recherche et coopération pour comprendre les risques climatiques et soutenir l’adaptation de nos territoires.
                </p>
            </div>

            <div class="mt-8 flex flex-col gap-3 sm:flex-row">
                <a href="{{ url('/results') }}" class="inline-flex min-h-12 items-center justify-center rounded-xl bg-yellow-300 px-6 py-3 text-center font-bold text-sky-950 transition hover:bg-yellow-200 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-white">
                    <span data-container="translator">
                        <span data-lang="es">Conoce nuestros resultados</span>
                        <span class="hidden" data-lang="pt">Conhece os nossos resultados</span>
                        <span class="hidden" data-lang="en">Explore our results</span>
                        <span class="hidden" data-lang="fr">Découvrez nos résultats</span>
                    </span>
                </a>
                <a href="{{ url('/news') }}" class="inline-flex min-h-12 items-center justify-center rounded-xl border border-white/80 px-6 py-3 text-center font-bold text-white transition hover:bg-white/10 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-yellow-300">
                    <span data-container="translator">
                        <span data-lang="es">Últimas noticias</span>
                        <span class="hidden" data-lang="pt">Últimas notícias</span>
                        <span class="hidden" data-lang="en">Latest news</span>
                        <span class="hidden" data-lang="fr">Dernières actualités</span>
                    </span>
                </a>
            </div>
        </div>
    </div>
</section>

<section aria-labelledby="project-facts-title" class="mx-auto mt-8 w-full max-w-7xl px-4 sm:px-6 lg:mt-12">
    <h2 id="project-facts-title" class="text-2xl font-extrabold text-sky-950 sm:text-3xl">
        <span data-container="translator">
            <span data-lang="es">Financiación y duración de PLANCLIMAC2</span>
            <span class="hidden" data-lang="pt">Financiamento e duração do PLANCLIMAC2</span>
            <span class="hidden" data-lang="en">PLANCLIMAC2 funding and duration</span>
            <span class="hidden" data-lang="fr">Financement et durée de PLANCLIMAC2</span>
        </span>
    </h2>

    <dl class="mt-6 grid grid-cols-1 divide-y divide-slate-200 overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-sm md:grid-cols-3 md:divide-x md:divide-y-0">
        <div class="p-6 sm:p-8">
            <dt class="text-sm font-bold uppercase tracking-wide text-slate-600">
                <span data-container="translator">
                    <span data-lang="es">Presupuesto de ejecución</span>
                    <span class="hidden" data-lang="pt">Orçamento de execução</span>
                    <span class="hidden" data-lang="en">Project budget</span>
                    <span class="hidden" data-lang="fr">Budget d’exécution</span>
                </span>
            </dt>
            <dd class="mt-3 text-3xl font-extrabold tracking-tight text-emerald-700 sm:text-4xl">3.045.442,75 €</dd>
            <dd class="mt-2 text-sm text-slate-700">
                <span data-container="translator">
                    <span data-lang="es">Presupuesto de ejecución del proyecto</span>
                    <span class="hidden" data-lang="pt">Orçamento de execução do projeto</span>
                    <span class="hidden" data-lang="en">Project implementation budget</span>
                    <span class="hidden" data-lang="fr">Budget d’exécution du projet</span>
                </span>
            </dd>
        </div>

        <div class="p-6 sm:p-8">
            <dt class="text-sm font-bold uppercase tracking-wide text-slate-600">
                <span data-container="translator">
                    <span data-lang="es">Duración</span>
                    <span class="hidden" data-lang="pt">Duração</span>
                    <span class="hidden" data-lang="en">Duration</span>
                    <span class="hidden" data-lang="fr">Durée</span>
                </span>
            </dt>
            <dd class="mt-3 text-3xl font-extrabold tracking-tight text-sky-900">
                <span data-container="translator">
                    <span data-lang="es">48 meses</span>
                    <span class="hidden" data-lang="pt">48 meses</span>
                    <span class="hidden" data-lang="en">48 months</span>
                    <span class="hidden" data-lang="fr">48 mois</span>
                </span>
            </dd>
            <dd class="mt-2 text-sm text-slate-700">2025–2028</dd>
        </div>

        <div class="p-6 sm:p-8">
            <dt id="cofinancing-label" class="text-sm font-bold uppercase tracking-wide text-slate-600">
                <span data-container="translator">
                    <span data-lang="es">Cofinanciación</span>
                    <span class="hidden" data-lang="pt">Cofinanciamento</span>
                    <span class="hidden" data-lang="en">Co-financing</span>
                    <span class="hidden" data-lang="fr">Cofinancement</span>
                </span>
            </dt>
            <dd class="mt-3 text-3xl font-extrabold tracking-tight text-emerald-700 sm:text-4xl">85 %</dd>
            <div
                class="mt-4 h-2 overflow-hidden rounded-full bg-emerald-100"
                role="progressbar"
                aria-labelledby="cofinancing-label"
                aria-valuemin="0"
                aria-valuemax="100"
                aria-valuenow="85"
            >
                <div class="h-full w-[85%] rounded-full bg-emerald-600"></div>
            </div>
            <dd class="mt-3 text-sm leading-relaxed text-slate-700">
                <span data-container="translator">
                    <span data-lang="es">Programa de Cooperación Interreg Madeira-Azores-Canarias (MAC) 2021–2027</span>
                    <span class="hidden" data-lang="pt">Programa de Cooperação Interreg Madeira-Açores-Canárias (MAC) 2021–2027</span>
                    <span class="hidden" data-lang="en">Interreg Madeira-Azores-Canarias (MAC) Cooperation Programme 2021–2027</span>
                    <span class="hidden" data-lang="fr">Programme de coopération Interreg Madère-Açores-Canaries (MAC) 2021–2027</span>
                </span>
            </dd>
        </div>
    </dl>

    <article class="mt-4 grid gap-4 rounded-2xl bg-emerald-600 p-6 text-white sm:p-8 md:grid-cols-3 md:items-center md:gap-8">
        <div>
            <p class="text-sm font-bold uppercase tracking-[0.14em]">
                <span data-container="translator">
                    <span data-lang="es">Prioridad 2</span>
                    <span class="hidden" data-lang="pt">Prioridade 2</span>
                    <span class="hidden" data-lang="en">Priority 2</span>
                    <span class="hidden" data-lang="fr">Priorité 2</span>
                </span>
            </p>
            <h3 class="mt-1 text-2xl font-extrabold text-white sm:text-3xl">
                <span data-container="translator">
                    <span data-lang="es">MAC Verde</span>
                    <span class="hidden" data-lang="pt">MAC Verde</span>
                    <span class="hidden" data-lang="en">Green MAC</span>
                    <span class="hidden" data-lang="fr">MAC Vert</span>
                </span>
            </h3>
        </div>
        <div class="md:col-span-2" data-container="translator">
            <p class="leading-relaxed text-white/90" data-lang="es">
                Transición ecológica, apoyo al desarrollo de una economía verde y azul, lucha contra el cambio climático, prevención y gestión de riesgos y emergencias
            </p>
            <p class="hidden leading-relaxed text-white/90" data-lang="pt">
                Transição ecológica, apoio ao desenvolvimento de uma economia verde e azul, combate às alterações climáticas, prevenção e gestão de riscos e emergências
            </p>
            <p class="hidden leading-relaxed text-white/90" data-lang="en">
                Ecological transition, support for the development of a green and blue economy, fight against climate change, prevention and management of risks and emergencies
            </p>
            <p class="hidden leading-relaxed text-white/90" data-lang="fr">
                Transition écologique, soutien au développement d’une économie verte et bleue, lutte contre le changement climatique, prévention et gestion des risques et des urgences
            </p>
        </div>
    </article>
</section>


@php
    $consortiumPartners = [
        ['name' => ['es' => 'Gobierno de Azores', 'pt' => 'Governo dos Açores', 'en' => 'Government of the Azores', 'fr' => 'Gouvernement des Açores'], 'territory' => ['es' => 'Azores', 'pt' => 'Açores', 'en' => 'Azores', 'fr' => 'Açores'], 'category' => ['es' => 'Administración pública', 'pt' => 'Administração pública', 'en' => 'Public administration', 'fr' => 'Administration publique'], 'logo' => 'LOGO_AZORES.png', 'url' => 'https://portal.azores.gov.pt/', 'group' => 'macaronesia'],
        ['name' => ['es' => 'Región de Madeira', 'pt' => 'Região Autónoma da Madeira', 'en' => 'Madeira Region', 'fr' => 'Région de Madère'], 'territory' => ['es' => 'Madeira', 'pt' => 'Madeira', 'en' => 'Madeira', 'fr' => 'Madère'], 'category' => ['es' => 'Administración pública', 'pt' => 'Administração pública', 'en' => 'Public administration', 'fr' => 'Administration publique'], 'logo' => 'LOGO_MADEIRA.png', 'url' => 'https://www.madeira.gov.pt/draac/', 'group' => 'macaronesia'],
        ['name' => ['es' => 'GESPLAN', 'pt' => 'GESPLAN', 'en' => 'GESPLAN', 'fr' => 'GESPLAN'], 'territory' => ['es' => 'Canarias', 'pt' => 'Canárias', 'en' => 'Canary Islands', 'fr' => 'Îles Canaries'], 'category' => ['es' => 'Empresa pública', 'pt' => 'Empresa pública', 'en' => 'Public company', 'fr' => 'Entreprise publique'], 'logo' => 'LOGO_GESPLAN.png', 'url' => 'https://www.gesplan.es/', 'group' => 'macaronesia'],
        ['name' => ['es' => 'ITER', 'pt' => 'ITER', 'en' => 'ITER', 'fr' => 'ITER'], 'territory' => ['es' => 'Canarias', 'pt' => 'Canárias', 'en' => 'Canary Islands', 'fr' => 'Îles Canaries'], 'category' => ['es' => 'Empresa pública', 'pt' => 'Empresa pública', 'en' => 'Public company', 'fr' => 'Entreprise publique'], 'logo' => 'LOGO_ITER.png', 'url' => 'https://www.iter.es/', 'group' => 'macaronesia'],
        ['name' => ['es' => 'Instituto Tecnológico de Canarias (ITC)', 'pt' => 'Instituto Tecnológico de Canarias (ITC)', 'en' => 'Canary Islands Institute of Technology (ITC)', 'fr' => 'Institut Technologique des Canaries (ITC)'], 'territory' => ['es' => 'Canarias', 'pt' => 'Canárias', 'en' => 'Canary Islands', 'fr' => 'Îles Canaries'], 'category' => ['es' => 'Empresa pública', 'pt' => 'Empresa pública', 'en' => 'Public company', 'fr' => 'Entreprise publique'], 'logo' => 'LOGO_ITC.svg', 'url' => 'https://www.itccanarias.org/web/es/', 'group' => 'macaronesia'],
        ['name' => ['es' => 'Universidad de Las Palmas de Gran Canaria (ULPGC)', 'pt' => 'Universidade de Las Palmas de Gran Canaria (ULPGC)', 'en' => 'University of Las Palmas de Gran Canaria (ULPGC)', 'fr' => 'Université de Las Palmas de Gran Canaria (ULPGC)'], 'territory' => ['es' => 'Canarias', 'pt' => 'Canárias', 'en' => 'Canary Islands', 'fr' => 'Îles Canaries'], 'category' => ['es' => 'Universidad', 'pt' => 'Universidade', 'en' => 'University', 'fr' => 'Université'], 'logo' => 'LOGO_ULPGC.png', 'url' => 'https://www10.ulpgc.es/', 'group' => 'macaronesia'],
        ['name' => ['es' => 'Universidad de La Laguna (ULL)', 'pt' => 'Universidade de La Laguna (ULL)', 'en' => 'University of La Laguna (ULL)', 'fr' => 'Université de La Laguna (ULL)'], 'territory' => ['es' => 'Canarias', 'pt' => 'Canárias', 'en' => 'Canary Islands', 'fr' => 'Îles Canaries'], 'category' => ['es' => 'Universidad', 'pt' => 'Universidade', 'en' => 'University', 'fr' => 'Université'], 'logo' => 'LOGO_ULL.png', 'url' => 'https://www.ull.es/', 'group' => 'macaronesia'],
        ['name' => ['es' => 'INMG', 'pt' => 'INMG', 'en' => 'INMG', 'fr' => 'INMG'], 'territory' => ['es' => 'Cabo Verde', 'pt' => 'Cabo Verde', 'en' => 'Cape Verde', 'fr' => 'Cap-Vert'], 'category' => ['es' => 'Socio africano', 'pt' => 'Parceiro africano', 'en' => 'African partner', 'fr' => 'Partenaire africain'], 'logo' => 'LOGO_INMG.webp', 'url' => 'https://www.inmg.gov.cv/', 'group' => 'africa'],
        ['name' => ['es' => 'DGAAG', 'pt' => 'DGAAG', 'en' => 'DGAAG', 'fr' => 'DGAAG'], 'territory' => ['es' => 'Santo Tomé y Príncipe', 'pt' => 'São Tomé e Príncipe', 'en' => 'São Tomé and Príncipe', 'fr' => 'Sao Tomé-et-Principe'], 'category' => ['es' => 'Socio africano', 'pt' => 'Parceiro africano', 'en' => 'African partner', 'fr' => 'Partenaire africain'], 'logo' => 'LOGO_SAO_TOME.png', 'url' => 'https://www.facebook.com/dga.stp/', 'group' => 'africa'],
        ['name' => ['es' => 'Socio de Ghana', 'pt' => 'Parceiro do Gana', 'en' => 'Ghana partner', 'fr' => 'Partenaire du Ghana'], 'territory' => ['es' => 'Ghana', 'pt' => 'Gana', 'en' => 'Ghana', 'fr' => 'Ghana'], 'category' => ['es' => 'Socio africano', 'pt' => 'Parceiro africano', 'en' => 'African partner', 'fr' => 'Partenaire africain'], 'logo' => 'LOGO_GHANA.jpg', 'url' => 'https://mlnr.gov.gh/', 'group' => 'africa'],
        ['name' => ['es' => 'OIPR', 'pt' => 'OIPR', 'en' => 'OIPR', 'fr' => 'OIPR'], 'territory' => ['es' => 'Costa de Marfil', 'pt' => 'Costa do Marfim', 'en' => 'Ivory Coast', 'fr' => 'Côte d’Ivoire'], 'category' => ['es' => 'Socio africano', 'pt' => 'Parceiro africano', 'en' => 'African partner', 'fr' => 'Partenaire africain'], 'logo' => 'LOGO_COSTA_MARFIL.png', 'url' => null, 'group' => 'africa'],
    ];
@endphp

<section id="consortium" aria-labelledby="consortium-title" class="section-container mt-16">
    <header class="max-w-3xl">
        <p class="section-eyebrow">
            <span data-container="translator">
                <span data-lang="es">Cooperación internacional</span><span class="hidden" data-lang="pt">Cooperação internacional</span><span class="hidden" data-lang="en">International cooperation</span><span class="hidden" data-lang="fr">Coopération internationale</span>
            </span>
        </p>
        <h2 id="consortium-title" class="section-title mt-2">
            <span data-container="translator">
                <span data-lang="es">Siete regiones, un mismo objetivo</span><span class="hidden" data-lang="pt">Sete regiões, um mesmo objetivo</span><span class="hidden" data-lang="en">Seven regions, one shared goal</span><span class="hidden" data-lang="fr">Sept régions, un même objectif</span>
            </span>
        </h2>
        <p class="mt-2 max-w-2xl text-sm leading-relaxed text-slate-600 sm:text-base">
            <span data-container="translator">
                <span data-lang="es">Conoce las entidades que forman parte de PLANCLIMAC2.</span><span class="hidden" data-lang="pt">Conhece as entidades que fazem parte do PLANCLIMAC2.</span><span class="hidden" data-lang="en">Meet the organisations that make up PLANCLIMAC2.</span><span class="hidden" data-lang="fr">Découvrez les organismes qui composent PLANCLIMAC2.</span>
            </span>
        </p>
    </header>

    <dl class="mt-7 grid grid-cols-3 divide-x divide-slate-200 rounded-2xl border-y border-slate-200 py-5 sm:py-6">
        <div class="flex flex-col px-2 text-center sm:px-6">
            <dt class="order-2 mt-1 text-xs text-slate-600 sm:text-sm"><span data-container="translator"><span data-lang="es">Entidades</span><span class="hidden" data-lang="pt">Entidades</span><span class="hidden" data-lang="en">Partners</span><span class="hidden" data-lang="fr">Organismes</span></span></dt>
            <dd class="order-1 text-2xl font-bold tracking-tight text-sky-950 sm:text-3xl">12</dd>
        </div>
        <div class="flex flex-col px-2 text-center sm:px-6">
            <dt class="order-2 mt-1 text-xs text-slate-600 sm:text-sm"><span data-container="translator"><span data-lang="es">Regiones</span><span class="hidden" data-lang="pt">Regiões</span><span class="hidden" data-lang="en">Regions</span><span class="hidden" data-lang="fr">Régions</span></span></dt>
            <dd class="order-1 text-2xl font-bold tracking-tight text-sky-950 sm:text-3xl">7</dd>
        </div>
        <div class="flex flex-col px-2 text-center sm:px-6">
            <dt class="order-2 mt-1 text-xs text-slate-600 sm:text-sm"><span data-container="translator"><span data-lang="es">Objetivo común</span><span class="hidden" data-lang="pt">Objetivo comum</span><span class="hidden" data-lang="en">Shared goal</span><span class="hidden" data-lang="fr">Objectif commun</span></span></dt>
            <dd class="order-1 text-2xl font-bold tracking-tight text-sky-950 sm:text-3xl">1</dd>
        </div>
    </dl>

    <section aria-labelledby="lead-partner-title" class="mt-7">
        <div class="mb-3 flex items-center justify-between gap-3">
            <h3 id="lead-partner-title" class="text-lg font-bold text-sky-950">
                <span data-container="translator"><span data-lang="es">Socio principal</span><span class="hidden" data-lang="pt">Parceiro principal</span><span class="hidden" data-lang="en">Lead partner</span><span class="hidden" data-lang="fr">Partenaire principal</span></span>
            </h3>
            <span class="rounded-full bg-sky-50 px-3 py-1 text-xs font-semibold text-sky-900 sm:text-sm">
                <span data-container="translator"><span data-lang="es">Coordinación</span><span class="hidden" data-lang="pt">Coordenação</span><span class="hidden" data-lang="en">Coordination</span><span class="hidden" data-lang="fr">Coordination</span></span>
            </span>
        </div>
        <a href="https://www.gobiernodecanarias.org/cambioclimatico/index.html" target="_blank" rel="noopener noreferrer" class="lead-partner-card">
            <span class="flex h-16 w-20 shrink-0 items-center justify-center rounded-xl border border-slate-200 bg-white p-2 sm:h-20 sm:w-24">
                <img src="{{ asset('images/LOGO_GOBIERNO_CANARIAS.svg') }}" alt="" class="max-h-full max-w-full object-contain">
            </span>
            <span class="min-w-0 flex-1">
                <span class="block font-bold text-slate-900 sm:text-lg"><span data-container="translator"><span data-lang="es">Gobierno de Canarias</span><span class="hidden" data-lang="pt">Governo das Canárias</span><span class="hidden" data-lang="en">Government of the Canary Islands</span><span class="hidden" data-lang="fr">Gouvernement des Canaries</span></span></span>
                <span class="mt-1 block text-sm text-slate-600"><span data-container="translator"><span data-lang="es">Socio principal del proyecto</span><span class="hidden" data-lang="pt">Parceiro principal do projeto</span><span class="hidden" data-lang="en">Lead partner of the project</span><span class="hidden" data-lang="fr">Partenaire principal du projet</span></span></span>
            </span>
            <span aria-hidden="true" class="text-lg text-slate-400">↗</span>
        </a>
    </section>

    <section aria-labelledby="participant-title" class="mt-7">
        <h3 id="participant-title" class="text-lg font-bold text-sky-950">
            <span data-container="translator"><span data-lang="es">Entidades participantes</span><span class="hidden" data-lang="pt">Entidades participantes</span><span class="hidden" data-lang="en">Participating organisations</span><span class="hidden" data-lang="fr">Organismes participants</span></span>
        </h3>
        <div class="mt-3 flex flex-wrap gap-2" role="group" aria-labelledby="participant-title">
            <button type="button" class="partner-filter" data-partner-filter="all" aria-controls="partner-grid" aria-pressed="true"><span data-container="translator"><span data-lang="es">Todos</span><span class="hidden" data-lang="pt">Todos</span><span class="hidden" data-lang="en">All</span><span class="hidden" data-lang="fr">Tous</span></span></button>
            <button type="button" class="partner-filter" data-partner-filter="macaronesia" aria-controls="partner-grid" aria-pressed="false"><span data-container="translator"><span data-lang="es">Macaronesia</span><span class="hidden" data-lang="pt">Macaronésia</span><span class="hidden" data-lang="en">Macaronesia</span><span class="hidden" data-lang="fr">Macaronésie</span></span></button>
            <button type="button" class="partner-filter" data-partner-filter="africa" aria-controls="partner-grid" aria-pressed="false"><span data-container="translator"><span data-lang="es">África</span><span class="hidden" data-lang="pt">África</span><span class="hidden" data-lang="en">Africa</span><span class="hidden" data-lang="fr">Afrique</span></span></button>
        </div>
        <div id="partner-grid" class="mt-3 grid grid-cols-1 gap-3 sm:grid-cols-2 xl:grid-cols-3" aria-live="polite">
            @foreach ($consortiumPartners as $partner)
                <x-PartnerCard :partner="$partner" />
            @endforeach
        </div>
    </section>
</section>

<script>
    (() => {
        const filters = document.querySelectorAll('[data-partner-filter]');
        const cards = document.querySelectorAll('[data-partner-group]');

        if (!filters.length || !cards.length) return;

        filters.forEach((filter) => {
            filter.addEventListener('click', () => {
                const selectedGroup = filter.dataset.partnerFilter;

                filters.forEach((button) => {
                    button.setAttribute('aria-pressed', String(button === filter));
                });

                cards.forEach((card) => {
                    card.hidden = selectedGroup !== 'all' && card.dataset.partnerGroup !== selectedGroup;
                });
            });
        });
    })();
</script>

<section id="project-objectives" aria-labelledby="objectives-title" class="section-container my-16">
    <header class="mb-7 max-w-3xl">
        <h2 id="objectives-title" class="section-title">
            <span data-container="translator">
                <span data-lang="es">Objetivos del proyecto</span>
                <span class="hidden" data-lang="pt">Objetivos do projeto</span>
                <span class="hidden" data-lang="en">Project objectives</span>
                <span class="hidden" data-lang="fr">Objectifs du projet</span>
            </span>
        </h2>
        <p class="mt-2 text-sm leading-relaxed text-slate-600 sm:text-base">
            <span data-container="translator">
                <span data-lang="es">Tres objetivos estratégicos para avanzar en el conocimiento, la cooperación y la adaptación al cambio climático en la Macaronesia.</span>
                <span class="hidden" data-lang="pt">Três objetivos estratégicos para avançar no conhecimento, na cooperação e na adaptação às alterações climáticas na Macaronésia.</span>
                <span class="hidden" data-lang="en">Three strategic objectives to advance knowledge, cooperation and climate change adaptation in Macaronesia.</span>
                <span class="hidden" data-lang="fr">Trois objectifs stratégiques pour faire progresser les connaissances, la coopération et l’adaptation au changement climatique en Macaronésie.</span>
            </span>
        </p>
    </header>

    <div id="objective-tablist" class="objective-tablist" role="tablist" aria-labelledby="objectives-title" hidden>
        @foreach ($objectives as $index => $objective)
            <button
                id="objective-tab-{{ $index + 1 }}"
                class="objective-tab sm:h-48 sm:p-5"
                type="button"
                role="tab"
                aria-controls="objective-panel-{{ $index + 1 }}"
                aria-selected="{{ $index === 0 ? 'true' : 'false' }}"
                tabindex="{{ $index === 0 ? '0' : '-1' }}">
                <img
                    src="{{ asset($objective['image']) }}"
                    alt=""
                    width="720"
                    height="420"
                    loading="lazy"
                    class="objective-tab-image">
                <span class="objective-tab-shade" aria-hidden="true"></span>
                <span class="objective-tab-number" aria-hidden="true">{{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}</span>
                <span class="objective-tab-title" data-container="translator">
                    @foreach (['es', 'pt', 'en', 'fr'] as $language)
                        <span @class(['hidden' => $language !== 'es']) data-lang="{{ $language }}">{{ $objective['navigation_title'][$language] }}</span>
                    @endforeach
                </span>
            </button>
        @endforeach
    </div>

    @foreach ($objectives as $index => $objective)
        <section
            id="objective-panel-{{ $index + 1 }}"
            class="objective-panel sm:p-8"
            data-objective-panel="{{ $index + 1 }}"
            tabindex="0">
            <header class="mb-6 max-w-4xl">
                <p class="section-eyebrow">
                    <span data-container="translator">
                        <span data-lang="es">Objetivo {{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}</span>
                        <span class="hidden" data-lang="pt">Objetivo {{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}</span>
                        <span class="hidden" data-lang="en">Objective {{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}</span>
                        <span class="hidden" data-lang="fr">Objectif {{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}</span>
                    </span>
                </p>
                <h3 class="mt-2 text-xl font-bold tracking-tight text-sky-950 sm:text-2xl">
                    <span data-container="translator">
                        @foreach (['es', 'pt', 'en', 'fr'] as $language)
                            <span @class(['hidden' => $language !== 'es']) data-lang="{{ $language }}">{{ $objective['title'][$language] }}</span>
                        @endforeach
                    </span>
                </h3>
                <p class="mt-3 text-base leading-relaxed text-slate-700">
                    <span data-container="translator">
                        @foreach (['es', 'pt', 'en', 'fr'] as $language)
                            <span @class(['hidden' => $language !== 'es']) data-lang="{{ $language }}">{{ $objective['description'][$language] }}</span>
                        @endforeach
                    </span>
                </p>
            </header>

            <div class="grid grid-cols-1 gap-3">
                @foreach ($objective['activities'] as $activity)
                    <x-activity
                        :id="$activity['id']"
                        :description="$activity['description']"
                    />
                @endforeach
            </div>
        </section>
    @endforeach
</section>

<script>
    (() => {
        const tablist = document.querySelector('#objective-tablist');
        if (!tablist) return;

        const tabs = Array.from(tablist.querySelectorAll('[role="tab"]'));
        const panels = tabs.map((tab) => document.getElementById(tab.getAttribute('aria-controls')));
        if (!tabs.length || panels.some((panel) => !panel)) return;

        panels.forEach((panel, index) => {
            panel.setAttribute('role', 'tabpanel');
            panel.setAttribute('aria-labelledby', tabs[index].id);
        });

        const activateTab = (selectedIndex, moveFocus = false) => {
            tabs.forEach((tab, index) => {
                const selected = index === selectedIndex;
                tab.setAttribute('aria-selected', String(selected));
                tab.tabIndex = selected ? 0 : -1;
                panels[index].hidden = !selected;
            });

            panels[selectedIndex].classList.remove('is-entering');
            if (!window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
                void panels[selectedIndex].offsetWidth;
                panels[selectedIndex].classList.add('is-entering');
            }

            if (moveFocus) tabs[selectedIndex].focus();
        };

        tabs.forEach((tab, index) => {
            tab.addEventListener('click', () => activateTab(index));

            tab.addEventListener('keydown', (event) => {
                let nextIndex = index;

                if (event.key === 'ArrowRight') nextIndex = (index + 1) % tabs.length;
                else if (event.key === 'ArrowLeft') nextIndex = (index - 1 + tabs.length) % tabs.length;
                else if (event.key === 'Home') nextIndex = 0;
                else if (event.key === 'End') nextIndex = tabs.length - 1;
                else return;

                event.preventDefault();
                activateTab(nextIndex, true);
            });
        });

        activateTab(0);
        tablist.hidden = false;
    })();
</script>


@php
    $indicatorGroups = [
        [
            'id' => 'research',
            'title' => ['es' => 'Investigación y conocimiento', 'pt' => 'Investigação e conhecimento', 'en' => 'Research and knowledge', 'fr' => 'Recherche et connaissances'],
            'ids' => ['studies', 'researchers', 'scientific-publications', 'vulnerability-indicators'],
        ],
        [
            'id' => 'cooperation',
            'title' => ['es' => 'Cooperación y seguimiento', 'pt' => 'Cooperação e acompanhamento', 'en' => 'Cooperation and follow-up', 'fr' => 'Coopération et suivi'],
            'ids' => ['follow-up-meetings'],
        ],
        [
            'id' => 'communication',
            'title' => ['es' => 'Comunicación y participación', 'pt' => 'Comunicação e participação', 'en' => 'Communication and participation', 'fr' => 'Communication et participation'],
            'ids' => ['event-participants', 'website-visits', 'dissemination-events'],
        ],
    ];
@endphp

<section id="project-indicators" aria-labelledby="project-indicators-title" class="section-container my-16">
    <header class="mb-8 max-w-3xl">
        <p class="section-eyebrow">
            <span data-container="translator">
                <span data-lang="es">Resultados del proyecto</span><span class="hidden" data-lang="pt">Resultados do projeto</span><span class="hidden" data-lang="en">Project results</span><span class="hidden" data-lang="fr">Résultats du projet</span>
            </span>
        </p>
        <h2 id="project-indicators-title" class="section-title mt-2">
            <span data-container="translator">
                <span data-lang="es">Indicadores del proyecto</span><span class="hidden" data-lang="pt">Indicadores do projeto</span><span class="hidden" data-lang="en">Project indicators</span><span class="hidden" data-lang="fr">Indicateurs du projet</span>
            </span>
        </h2>
        <p class="mt-2 text-sm leading-relaxed text-slate-600 sm:text-base">
            <span data-container="translator">
                <span data-lang="es">Avances de PLANCLIMAC2 en investigación, cooperación y divulgación climática.</span><span class="hidden" data-lang="pt">Avanços do PLANCLIMAC2 em investigação, cooperação e divulgação climática.</span><span class="hidden" data-lang="en">PLANCLIMAC2 progress in climate research, cooperation and outreach.</span><span class="hidden" data-lang="fr">Avancées de PLANCLIMAC2 en matière de recherche, de coopération et de sensibilisation au climat.</span>
            </span>
        </p>
    </header>

    <div class="space-y-8" data-indicators>
        @foreach ($indicatorGroups as $group)
            @php
                $groupIndicators = array_values(array_filter($results, fn ($indicator) => in_array($indicator['id'], $group['ids'], true)));
            @endphp
            <section aria-labelledby="indicator-group-{{ $group['id'] }}">
                <h3 id="indicator-group-{{ $group['id'] }}" class="mb-3 text-lg font-bold text-sky-950 sm:text-xl">
                    <span data-container="translator">
                        @foreach (['es', 'pt', 'en', 'fr'] as $language)
                            <span @class(['hidden' => $language !== 'es']) data-lang="{{ $language }}">{{ $group['title'][$language] }}</span>
                        @endforeach
                    </span>
                </h3>
                <dl @class([
                    'grid gap-3 sm:gap-4',
                    'grid-cols-1' => $group['id'] === 'cooperation',
                    'grid-cols-2 sm:grid-cols-4' => $group['id'] === 'research',
                    'grid-cols-2 sm:grid-cols-3' => $group['id'] === 'communication',
                ])>
                    @foreach ($groupIndicators as $indicator)
                        <x-project-indicator
                            :indicator="$indicator"
                            :featured="$indicator['id'] === 'follow-up-meetings'"
                            :spotlight="$indicator['id'] === 'website-visits'"
                        />
                    @endforeach
                </dl>
            </section>
        @endforeach
    </div>
</section>

<script>
    (() => {
        const section = document.querySelector('[data-indicators]');
        if (!section) return;

        const counters = Array.from(section.querySelectorAll('[data-count-up]'));
        const reducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
        if (!counters.length || reducedMotion || !('IntersectionObserver' in window)) return;

        const formatValue = (value) => Math.trunc(value).toString().replace(/\B(?=(\d{3})+(?!\d))/g, '.');
        const duration = 1500;
        const frames = new Map();
        let hasStarted = false;

        const observer = new IntersectionObserver((entries) => {
            if (hasStarted || !entries.some((entry) => entry.isIntersecting)) return;

            hasStarted = true;
            observer.disconnect();

            counters.forEach((counter) => {
                const endValue = Number(counter.dataset.countValue);
                if (!Number.isFinite(endValue) || endValue <= 0) {
                    counter.textContent = formatValue(Math.max(0, endValue || 0));
                    return;
                }

                counter.textContent = '0';
                const startTime = performance.now();

                const tick = (now) => {
                    const progress = Math.min((now - startTime) / duration, 1);
                    const eased = 1 - Math.pow(1 - progress, 4);
                    counter.textContent = formatValue(Math.round(endValue * eased));

                    if (progress < 1) {
                        frames.set(counter, requestAnimationFrame(tick));
                    } else {
                        counter.textContent = formatValue(endValue);
                        frames.delete(counter);
                    }
                };

                frames.set(counter, requestAnimationFrame(tick));
            });
        }, { threshold: 0.15 });

        observer.observe(section);

        window.addEventListener('pagehide', () => {
            observer.disconnect();
            frames.forEach((frame) => cancelAnimationFrame(frame));
            frames.clear();
        }, { once: true });
    })();
</script>
@endsection

