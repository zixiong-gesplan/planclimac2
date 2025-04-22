@extends('layouts.app')

@section('title', 'PLANCLIMAC2 (1/MAC/2/2.4/0006)')

@section('content')
<section class="w-full md:w-10/12 mx-auto my-8 md:mb-16 flex flex-col md:flex-row gap-8">
    <div class="w-full md:w-1/2">
        <img src="/images/PLANCLIMAC2_AMARILLO.svg" alt="Logo PLANCLIMAC2" class="w-10/12 mb-2">
        <h1 class="text-lg md:text-3xl font-extrabold capitalize mb4 text-yellow-400 md:ml-4">(1/MAC/2/2.4/0006)</h1>
        <h2 class="text-sm md:text-lg font-extrabold text-slate-700 uppercase mx-auto mb-4 md:ml-4 text-balance">
            DESARROLLO Y MONITORIZACIÓN DE ACTUACIONES COORDINADAS EN LA REGIÓN MACARONESIA EN MATERIA DE RIESGOS Y AMENZADAS DEL CAMBIO CLIMÁTICO
        </h1>
        <img src="https://interregmac.org/wp-content/uploads/2023/07/Group-9.jpg" alt="" class="w-full">
    </div>
    <div class="w-full md:w-1/2 h-full">
        <img src="/images/HERO.jpg" alt="" class="w-full rounded-lg aspect-video my-auto shadow-lg">
    </div>
</section>

<section class="w-10/12 mt-2 gap-4 lg:gap-6 justify-center grid  grid-cols-1 sm:grid-cols-2 md:grid-cols-4 mx-auto">
    <div class="bg-emerald-50 p-4 rounded-lg shadow-lg">
        <h1 class="w-full text-2xl font-extrabold capitalize mb-2 text-emerald-500">
            3.045.442,75 €
        </h1>
        <p class="text-slate text-base font-semibold">
            Presupuesto de ejecución
        </p>
    </div>
    <div class="bg-sky-50 p-4 rounded-lg shadow-lg">
        <h1 class="w-full text-2xl font-extrabold capitalize mb-2 text-sky-800">
            48 Meses
        </h1>
        <p class="text-stale-900 text-base font-semibold">
            Duración del proyecto 2025-2028
        </p>
    </div>
    <div class="bg-emerald-50 p-4 rounded-lg shadow-lg">
        <h1 class="w-full text-2xl font-extrabold capitalize mb-2 text-emerald-500">
            85%
        </h1>
        <p class="text-stale-900 text-base font-semibold">
            Co-financiación por el Programa de Cooperacion Interreg Madeira-Azores-Canarias (MAC) 2021-2027
        </p>
    </div>
    <div class="bg-sky-50 p-4 rounded-lg shadow-lg">
        <h1 class="w-full text-xl font-extrabold capitalize mb-2 text-sky-800">
            Prioridad 2 - MAC Verde   
        </h1>
        <p class="text-stale-900 text-base font-semibold">
            Transición ecológica, apoyo al desarrollo de una economía verde y azul, lucha contra el cambio climático, prevención y gestion de riesgos y emergencias
        </p>
    </div>
</section>


<section class="mt-16 w-10/12 mx-auto">
    <h1 class="w-full text-center text-4xl font-extrabold capitalize mb-4 text-sky-800 drop-shadow-[0_1px_1px_rgba(0,0,0,0.5)]">
        Siete regiones disintas.... Un mismo objetivo... 
    </h1>
    <p class="text-lg text-center text-balance">
        Bajo el marco del proyecto PLANCLIMAC2 (1/MAC/2/2.4/0006) se ha construido un grupo de trabajo 
        multidisciplinar e interregional que actua en todo el espacio de cooperación 
        del Programa INTERREG VI-D MAC 2021-2027.
    </p>
    <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-x-16 gap-y-8 py-8">
        <x-PartnerCard 
            src="https://www.gobiernodecanarias.org/gcc/img/logos/logo.svg"
            alt="Gobierno de Canarias"
            caption="Socio Principal"
            href="https://www.gobiernodecanarias.org/transicionecologica/index.html"
        />

        <x-PartnerCard 
            src="https://www.lifebeetlesazores.com/wp-content/uploads/2021/11/logo-govDRACC.png"
            alt="Gobierno de Azores"
            caption="Administración Pública"
            href="https://portal.azores.gov.pt/"
        />
        <x-PartnerCard 
            src="/images/LOGO_MADEIRA.png"
            alt="Gobierno de Madeira"
            caption="Administración Pública"
            href="https://www.madeira.gov.pt/"
        />

        <x-PartnerCard 
            src="/images/LOGO_GESPLAN.png"
            alt="Gesplan"
            caption="Empresa Pública"
            href="https://www.gesplan.es/"
        />

        <x-PartnerCard 
            src="https://www.iter.es/wp-content/uploads/2016/05/logo_retina.png"
            alt="ITER"
            caption="Empresa Pública"
            href="https://www.iter.es/"
        />
        <x-PartnerCard 
            src="/images/LOGO_ITC.svg"
            alt="ITC"
            caption="Empresa Pública"
            href="https://www.itccanarias.org/web/es/"
        />
        <x-PartnerCard 
            src="https://www.ulpgc.es/sites/default/files/ArchivosULPGC/identidad-corporativa/NuevoLogo/logo_ulpgc_version_vertical_positiva_uso_cotidiano_2_tintas.svg"
            alt="ULPGC"
            caption="Universidad"
            href="https://www.itccanarias.org/web/es/"
        />

        <x-PartnerCard 
            src="https://www.rankingcyd.org/assets/img/logoUnis2/1284.png"
            alt="ULL"
            caption="Universidad"
            href="https://www.ull.es/"
        />

        <x-PartnerCard 
            src="/images/LOGO_INMG.webp"
            alt="INMG"
            caption="Tercer Pais"
            href="https://www.inmg.gov.cv/"
        />

        <x-PartnerCard 
            src="/images/LOGO_SAO_TOME.png"
            alt="DGAAG"
            caption="Tercer Pais"
            href="https://www.facebook.com/dga.stp/"
        />

        <x-PartnerCard 
            src="https://delivery-tracker-staging.s3.amazonaws.com/282bf19c-2857-4959-85a8-ad2242d0a7d9"
            alt="Ministerio de recursos naturales"
            caption="Tercer Pais"
            href="https://mlnr.gov.gh/"
        />
        <x-PartnerCard 
            src="/images/LOGO_COSTA_MARFIL.png"
            alt="Ministerio de recursos naturales"
            caption="Tercer Pais"
            href="#"
        />
    </div>

</section>

<section class="my-12 flex flex-col gap-16 w-10/12 mx-auto">
    @foreach($objectives as $o)
    <div @class([
        'flex gap-16 flex-col md:flex-row my-4',
        'md:flex-row-reverse' => $loop->index % 2 == 1
    ])>
        <article class="w-full md:w-1/2 flex flex-col justify-center">
            <h1 class="text-2xl font-semibold">
                {{ $o['title'] }}
            </h1>
            <p>
                {{ $o['description'] }}
            </p>
        </article>
        <div class="w-full md:w-1/2 flex flex-col gap-4">
            @foreach( $o['activities'] as $a )
            <x-Activity
                id="{{ $a['id'] }}"
                description="{{ $a['description'] }}"
            />
            @endforeach
        </div>
    </div>
    @endforeach

</section>

<section class="my-16 w-10/12 mx-auto">
    <div class="w-full">
        <h1 class="w-full text-center text-lg md:text-2xl font-semibold my-4">Indicadores del proyecto</h1>
        <p class="w-full text-center text-md md:text-xl">
            En el proyecto <span class="text-sky-800 font-semibold">PLANCLIMAC2</span> nos centramos en la innovación del desarrollo a largo plazo con la vigilancia en el cambio climatico y el impacto del mismo la Macaronesia con los siguentes indicadores.
        </p>
    </div>
    <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-4 mt-8">
    @foreach($results as $r)
        <x-BlueCard
            title="{{ $r['title'] }}"
            progress="{{ $r['progress'] }}"
            target="{{ $r['target'] }}"
        />
    @endforeach
    </div>

</section>
@endsection

