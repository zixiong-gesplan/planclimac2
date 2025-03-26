@extends('layouts.app')

@section('title', 'Resultados')

@section('content')

<section class="mt-8 mb-4 mx-auto w-full md:w-2/3">

    <h1 class="w-full text-center text-3xl font-semibold text-emerald-500 mt-4">
        Resultados
    </h1>
    
    <div>
        <x-Objetive 
            subtitle="Consolidar el Observatorio de Cambio Climático (OCC) de la Macaronesia. Este ente
permitirá analizar y promover las medidas de adaptación al cambio climático y
establecer un marco de cooperación en la gestión de riesgos naturales provocados
por el cambio climático en la región macaronésica y terceros países."
        >
            Objetivo Específico 1
        </x-Objetive>

        <div class="flex flex-wrap gap-2 justify-center">
            <x-Result>
                Una hoja de ruta conjunta para la consecución de la Estrategia Macaronésica de Adaptación al Cambio Climático.
            </x-Result>
            <x-Result>
                Reuniones del Observatorio de Cambio Climático cada seis meses.
            </x-Result>
            <x-Result>
                Actualización del inventario sobre Cambio Climático para todas las regiones implicadas en las que se disponga de datos.
            </x-Result>
            <x-Result>
                Mantenimiento de un repositorio común y Base de Datos necesarias para la implementación de los escenarios.
            </x-Result>
            <x-Result>
                Desarrollo y promoción de planes de acción conjuntos.
            </x-Result>

        </div>
    </div>

    <div class="mt-8">
        <x-Objetive 
            subtitle="Evaluar la evolución de los indicadores regionales de cambio climático en la región
macaronésica (desde la atmósfera hasta el océano). Impactos y acciones de
adaptación vinculadas a la vulnerabilidad de los ecosistemas y la sociedad."
        >
            Objetivo Específico 2
        </x-Objetive>

        <div class="flex flex-wrap gap-2 justify-center">
            <x-Result>
            Plan de colaboración científico-técnica entre las entidades.
            </x-Result>
            <x-Result>
            Proyecciones climáticas a lo largo del S. XXI, en alta resolución espacio-temporal, para la región.
            </x-Result>
            <x-Result>
            Monitorizar el sistema costero de CO2 en la región macaronésica.
            </x-Result>
            <x-Result>
            Un estudio integrado sobre acidificación oceánica, emisiones de GEI y su cuantificación económica en la región.
            </x-Result>
            <x-Result>
            Identificación de cuencas de alto riesgo en los distintos escenarios de cambio climático y tras incendios forestales.
            </x-Result>
        </div>
    </div>

    
    <div class="mt-8">

        <x-Objetive 
            subtitle="Implementar acciones para la mejora del entendimiento científico y la coordinación
entre las administraciones y las entidades sociales y económicas ante los riesgos
asociados al cambio climático."
        >
            Objetivo Específico 3
        </x-Objetive>
        <div class="flex flex-wrap gap-2 justify-center">
            <x-Result>
            Formación sobre medidas de adaptación de territorios rurales y urbanos a eventos climáticos extremos.
            </x-Result>
            <x-Result>
            Crear la red de ciencia ciudadana PLANCLIMAC, con más de 500 usuarios en todo el territorio de cooperación MAC.
            </x-Result>
            <x-Result>
            Mapeo de las oportunidades de empleo y negocios verdes en el espacio MAC de cooperación.
            </x-Result>
            <x-Result>
            Actividades de networking (reuniones y capacitaciones) con diferentes agentes.
            </x-Result>
            <x-Result>
            Análisis de la vulnerabilidad, exposición y peligrosidad de Canarias ante el cambio climático..
            </x-Result>
        </div>
    </div>
</section>
@endsection