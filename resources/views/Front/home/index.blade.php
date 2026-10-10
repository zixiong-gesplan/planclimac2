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

<section class="relative z-10 mx-auto mt-5 grid w-full max-w-7xl grid-cols-1 justify-center gap-3 sm:grid-cols-2 lg:mt-7 lg:grid-cols-4 lg:gap-4">
    <div class="bg-emerald-50 p-4 rounded-lg shadow-lg">
        <h2 class="w-full text-2xl font-extrabold capitalize mb-2 text-emerald-500">
            3.045.442,75 €
        </h2>
        <div data-container="translator">
            <p 
                class="text-slate text-base font-semibold" 
                data-lang="es">
                Presupuesto de ejecución
            </p>
            <p 
                class="hidden text-slate text-base font-semibold" 
                data-lang="pt">
                Orçamento de execução
            </p>
            <p 
                class="hidden text-slate text-base font-semibold" 
                data-lang="en">
                Execution budget
            </p>
            <p 
                class="hidden text-slate text-base font-semibold" 
                data-lang="fr">
                Budget d’exécution
            </p>
        </div>
    </div>
    <div class="bg-sky-50 p-4 rounded-lg shadow-lg">
        <div data-container="translator">
            <h2
                class="w-full text-2xl font-extrabold capitalize mb-2 text-sky-800" 
                data-lang="es">
                48 Meses
            </h2>
            <h2
                class="hidden w-full text-2xl font-extrabold capitalize mb-2 text-sky-800" 
                data-lang="pt">
                48 Meses
            </h2>
            <h2
                class="hidden w-full text-2xl font-extrabold capitalize mb-2 text-sky-800" 
                data-lang="en">
                48 Months
            </h2>
            <h2
                class="hidden w-full text-2xl font-extrabold capitalize mb-2 text-sky-800" 
                data-lang="fr">
                48 Mois
            </h2>
        </div>
        <div data-container="translator">
            <p 
                class="text-stale-900 text-base font-semibold" 
                data-lang="es">
                Duración del proyecto 2025-2028
            </p>
            <p 
                class="hidden text-stale-900 text-base font-semibold" 
                data-lang="pt">
                Duração do projeto 2025-2028
            </p>
            <p 
                class="hidden text-stale-900 text-base font-semibold" 
                data-lang="en">
                Project duration 2025-2028
            </p>
            <p 
                class="hidden text-stale-900 text-base font-semibold" 
                data-lang="fr">
                Durée du projet 2025-2028
            </p>
        </div>

    </div>
    <div class="bg-emerald-50 p-4 rounded-lg shadow-lg">
        <div data-container="translator">
            <h2
                class="w-full text-2xl font-extrabold capitalize mb-2 text-emerald-500" 
                data-lang="es">
                85%
            </h2>
            <h2
                class="hidden w-full text-2xl font-extrabold capitalize mb-2 text-emerald-500" 
                data-lang="pt">
                85%
            </h2>
            <h2
                class="hidden w-full text-2xl font-extrabold capitalize mb-2 text-emerald-500" 
                data-lang="en">
                85%
            </h2>
            <h2
                class="hidden w-full text-2xl font-extrabold capitalize mb-2 text-emerald-500" 
                data-lang="fr">
                85%
            </h2>
        </div>
        <div data-container="translator">
            <p 
                class="text-slate-900 text-base font-semibold" 
                data-lang="es">
                Co-financiación por el Programa de Cooperación Interreg Madeira-Azores-Canarias (MAC) 2021-2027
            </p>
            <p 
                class="hidden text-slate-900 text-base font-semibold" 
                data-lang="pt">
                Co-financiamento pelo Programa de Cooperação Interreg Madeira-Açores-Canárias (MAC) 2021-2027
            </p>
            <p 
                class="hidden text-slate-900 text-base font-semibold" 
                data-lang="en">
                Co-financed by the Interreg Madeira-Azores-Canarias (MAC) Cooperation Programme 2021-2027
            </p>
            <p 
                class="hidden text-slate-900 text-base font-semibold" 
                data-lang="fr">
                Cofinancé par le Programme de Coopération Interreg Madère-Açores-Canaries (MAC) 2021-2027
            </p>
        </div>

    </div>
    <div class="bg-sky-50 p-4 rounded-lg shadow-lg">
        <div data-container="translator">
            <h2
                class="w-full text-xl font-extrabold capitalize mb-2 text-sky-800" 
                data-lang="es">
                Prioridad 2 - MAC Verde
            </h2>
            <h2
                class="hidden w-full text-xl font-extrabold capitalize mb-2 text-sky-800" 
                data-lang="pt">
                Prioridade 2 - MAC Verde
            </h2>
            <h2
                class="hidden w-full text-xl font-extrabold capitalize mb-2 text-sky-800" 
                data-lang="en">
                Priority 2 - Green MAC
            </h2>
            <h2
                class="hidden w-full text-xl font-extrabold capitalize mb-2 text-sky-800" 
                data-lang="fr">
                Priorité 2 - MAC Vert
            </h2>
        </div>
        <div data-container="translator">
            <p 
                class="text-slate-900 text-base font-semibold" 
                data-lang="es">
                Transición ecológica, apoyo al desarrollo de una economía verde y azul, lucha contra el cambio climático, prevención y gestión de riesgos y emergencias
            </p>
            <p 
                class="hidden text-slate-900 text-base font-semibold" 
                data-lang="pt">
                Transição ecológica, apoio ao desenvolvimento de uma economia verde e azul, combate às alterações climáticas, prevenção e gestão de riscos e emergências
            </p>
            <p 
                class="hidden text-slate-900 text-base font-semibold" 
                data-lang="en">
                Ecological transition, support for the development of a green and blue economy, fight against climate change, prevention and management of risks and emergencies
            </p>
            <p 
                class="hidden text-slate-900 text-base font-semibold" 
                data-lang="fr">
                Transition écologique, soutien au développement d’une économie verte et bleue, lutte contre le changement climatique, prévention et gestion des risques et des urgences
            </p>
        </div>
    </div>
</section>


<section class="mt-16 w-10/12 mx-auto">
    <div data-container="translator">
        <h2
            class="w-full text-center text-4xl font-extrabold mb-4 text-sky-800 drop-shadow-[0_1px_1px_rgba(0,0,0,0.5)]" 
            data-lang="es">
            Siete regiones distintas, un mismo objetivo
        </h2>
        <h2
            class="hidden w-full text-center text-4xl font-extrabold mb-4 text-sky-800 drop-shadow-[0_1px_1px_rgba(0,0,0,0.5)]" 
            data-lang="pt">
            Sete regiões distintas, um mesmo objetivo
        </h2>
        <h2
            class="hidden w-full text-center text-4xl font-extrabold mb-4 text-sky-800 drop-shadow-[0_1px_1px_rgba(0,0,0,0.5)]" 
            data-lang="en">
            Seven different regions, one common goal
        </h2>
        <h2
            class="hidden w-full text-center text-4xl font-extrabold mb-4 text-sky-800 drop-shadow-[0_1px_1px_rgba(0,0,0,0.5)]" 
            data-lang="fr">
            Sept régions différentes, un même objectif
        </h2>
    </div>
    <div data-container="translator">
        <p 
            class="text-lg text-center text-balance" 
            data-lang="es">
            Bajo el marco del proyecto PLANCLIMAC2 (1/MAC/2/2.4/0006) se ha construido un grupo de trabajo 
            multidisciplinar e interregional que actúa en todo el espacio de cooperación 
            del Programa INTERREG VI-D MAC 2021-2027.
        </p>
        <p 
            class="hidden text-lg text-center text-balance" 
            data-lang="pt">
            No âmbito do projeto PLANCLIMAC2 (1/MAC/2/2.4/0006), foi criado um grupo de trabalho 
            multidisciplinar e inter-regional que atua em todo o espaço de cooperação 
            do Programa INTERREG VI-D MAC 2021-2027.
        </p>
        <p 
            class="hidden text-lg text-center text-balance" 
            data-lang="en">
            Under the framework of the PLANCLIMAC2 project (1/MAC/2/2.4/0006), a multidisciplinary and interregional working group 
            has been established that operates throughout the cooperation area 
            of the INTERREG VI-D MAC 2021-2027 Programme.
        </p>
        <p 
            class="hidden text-lg text-center text-balance" 
            data-lang="fr">
            Dans le cadre du projet PLANCLIMAC2 (1/MAC/2/2.4/0006), un groupe de travail 
            pluridisciplinaire et interrégional a été créé, opérant dans l’ensemble de l’espace de coopération 
            du Programme INTERREG VI-D MAC 2021-2027.
        </p>
    </div>

    <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-x-16 gap-y-8 py-8">
        <x-PartnerCard 
            src="/images/LOGO_GOBIERNO_CANARIAS.svg"
            alt="Gobierno de Canarias"
            :caption="[
                'es' => 'Socio Principal',
                'pt' => 'Sócio Principal',
                'en' => 'Main Partner',
                'fr' => 'Partenaire principal'
            ]"
            href="https://www.gobiernodecanarias.org/transicionecologica/index.html"
        />

        <x-PartnerCard 
            src="/images/LOGO_AZORES.png"
            alt="Gobierno de Azores"
            :caption="[
                'es' => 'Administración Pública',
                'pt' => 'Administração Pública',
                'en' => 'Public Administration',
                'fr' => 'Administration Publique'
            ]"
            href="https://portal.azores.gov.pt/"
        />
        <x-PartnerCard 
            src="/images/LOGO_MADEIRA.png"
            alt="Gobierno de Madeira"
            :caption="[
                'es' => 'Administración Pública',
                'pt' => 'Administração Pública',
                'en' => 'Public Administration',
                'fr' => 'Administration Publique'
            ]"
            href="https://www.madeira.gov.pt/draac/"
        />

        <x-PartnerCard 
            src="/images/LOGO_GESPLAN.png"
            alt="Gesplan"
            :caption="[
                'es' => 'Empresa Pública',
                'pt' => 'Empresa Pública',
                'en' => 'Public Company',
                'fr' => 'Societé Publique'
            ]"
            href="https://www.gesplan.es/"
        />

        <x-PartnerCard 
            src="/images/LOGO_ITER.png"
            alt="ITER"
            :caption="[
                'es' => 'Empresa Pública',
                'pt' => 'Empresa Pública',
                'en' => 'Public Company',
                'fr' => 'Societé Publique'
            ]"
            href="https://www.iter.es/"
        />
        <x-PartnerCard 
            src="/images/LOGO_ITC.svg"
            alt="ITC"
            :caption="[
                'es' => 'Empresa Pública',
                'pt' => 'Empresa Pública',
                'en' => 'Public Company',
                'fr' => 'Societé Publique'
            ]"
            href="https://www.itccanarias.org/web/es/"
        />
        <x-PartnerCard 
            src="/images/LOGO_ULPGC.png"
            alt="ULPGC"
            :caption="[
                'es' => 'Universidad',
                'pt' => 'Universidade',
                'en' => 'University',
                'fr' => 'Université'
            ]"
            href="https://www10.ulpgc.es/"
        />

        <x-PartnerCard 
            src="/images/LOGO_ULL.png"
            alt="ULL"
            :caption="[
                'es' => 'Universidad',
                'pt' => 'Universidade',
                'en' => 'University',
                'fr' => 'Université'
            ]"
            href="https://www.ull.es/"
        />

        <x-PartnerCard 
            src="/images/LOGO_INMG.webp"
            alt="INMG"
            :caption="[
                'es' => 'Tercer País - Cabo Verde',
                'pt' => 'Terceiro País - Cabo Verde',
                'en' => 'Third Country - Cape Verde',
                'fr' => 'Pays tiers - Cap Vert'
            ]"
            href="https://www.inmg.gov.cv/"
        />

        <x-PartnerCard 
            src="/images/LOGO_SAO_TOME.png"
            alt="DGAAG"
            :caption="[
                'es' => 'Tercer País - Santo Tomé y Príncipe',
                'pt' => 'Terceiro País - São Tomé e Príncipe',
                'en' => 'Third Country - São Tomé and Príncipe',
                'fr' => 'Pays tiers - Sao Tomé-et-Principe'
            ]"
            href="https://www.facebook.com/dga.stp/"
        />

        <x-PartnerCard 
            src="/images/LOGO_GHANA.jpg"
            alt="Ministerio de recursos naturales"
            :caption="[
                'es' => 'Tercer País - Ghana',
                'pt' => 'Terceiro País - Gana',
                'en' => 'Third Country - Ghana',
                'fr' => 'Pays tiers - Ghana'
            ]"
            href="https://mlnr.gov.gh/"
        />
        
        <x-PartnerCard 
            src="/images/LOGO_COSTA_MARFIL.png"
            alt="Ministerio de recursos naturales"
            :caption="[
                'es' => 'Tercer Pais - Costa de Marfil',
                'pt' => 'Terceiro País - Costa do Marfim',
                'en' => 'Third Country - Ivory Coast',
                'fr' => 'Pays tiers - Côte Ivoire'
            ]"
            href="#"
        />
    </div>

</section>

<section class="my-12 flex flex-col gap-16 w-10/12 mx-auto">
@foreach($objectives as $i => $o)
        @php $reverse = $i % 2 === 1; @endphp

        <div @class(['flex gap-16 flex-col md:flex-row my-4', 'md:flex-row-reverse' => $reverse])>
                <article class="w-full md:w-1/2">
                    <div data-container="translator">

                        <h2 class="text-2xl font-semibold" data-lang="es">{{ $o['title']['es'] }}</h2>
                        <h2 class="text-2xl font-semibold hidden" data-lang="pt">{{ $o['title']['pt'] }}</h2>
                        <h2 class="text-2xl font-semibold hidden" data-lang="en">{{ $o['title']['en'] }}</h2>
                        <h2 class="text-2xl font-semibold hidden" data-lang="fr">{{ $o['title']['fr'] }}</h2>
                    </div>
                    <div data-container="translator">

                        <p data-lang="es">{{ $o['description']['es'] }}</p>
                        <p class="hidden" data-lang="pt">{{ $o['description']['pt'] }}</p>
                        <p class="hidden" data-lang="en">{{ $o['description']['en'] }}</p>
                        <p class="hidden" data-lang="fr">{{ $o['description']['fr'] }}</p>
                    </div>
                </article>

                <div class="w-full md:w-1/2 flex flex-col gap-4">
                @foreach($o['activities'] as $a)
                    <x-activity
                        :id="$a['id']"
                        :description="$a['description']"
                    />
                @endforeach
                </div>
            </div>

        </div>
    @endforeach

</section>

<section class="my-16 w-10/12 mx-auto">
    <div class="w-full">
        <div data-container="translator">
            <h2
                class="w-full text-center text-lg md:text-2xl font-semibold my-4" 
                data-lang="es">
                Indicadores del proyecto
            </h2>
            <h2
                class="hidden w-full text-center text-lg md:text-2xl font-semibold my-4" 
                data-lang="pt">
                Indicadores do projeto
            </h2>
            <h2
                class="hidden w-full text-center text-lg md:text-2xl font-semibold my-4" 
                data-lang="en">
                Project indicators
            </h2>
            <h2
                class="hidden w-full text-center text-lg md:text-2xl font-semibold my-4" 
                data-lang="fr">
                Indicateurs du projet
            </h2>
        </div>
        <div data-container="translator">
            <p 
                class="w-full text-center text-md md:text-xl" 
                data-lang="es">
                En el proyecto <span class="text-sky-800 font-semibold">PLANCLIMAC2</span> nos centramos en la innovación del desarrollo a largo plazo con la vigilancia en el cambio climático y el impacto del mismo en la Macaronesia con los siguientes indicadores.
            </p>
            <p 
                class="hidden w-full text-center text-md md:text-xl" 
                data-lang="pt">
                No projeto <span class="text-sky-800 font-semibold">PLANCLIMAC2</span> focamo-nos na inovação do desenvolvimento a longo prazo, com a monitorização das alterações climáticas e o seu impacto na Macaronésia, utilizando os seguintes indicadores.
            </p>
            <p 
                class="hidden w-full text-center text-md md:text-xl" 
                data-lang="en">
                In the <span class="text-sky-800 font-semibold">PLANCLIMAC2</span> project, we focus on innovation in long-term development, monitoring climate change and its impact on Macaronesia through the following indicators.
            </p>
            <p 
                class="hidden w-full text-center text-md md:text-xl" 
                data-lang="fr">
                Dans le cadre du projet <span class="text-sky-800 font-semibold">PLANCLIMAC2</span>, nous nous concentrons sur l’innovation dans le développement à long terme, la surveillance du changement climatique et son impact sur la Macaronésie à travers les indicateurs suivants.
            </p>
        </div>

    </div>
    <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-4 mt-8">
        @foreach($results as $r)
            <x-BlueCard
                :title="$r['title']"
                :progress="$r['progress']"
                :target="$r['target']"
            />
        @endforeach
    </div>

</section>
@endsection

