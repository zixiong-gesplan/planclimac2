@extends('layouts.app')

@section('title', 'PLANCLIMAC2 (1/MAC/2/2.4/0006) | Resultados')

@section('content')

<section class="mt-8 mb-4 mx-auto w-full md:w-2/3">

    <div data-container="translator">
        <h1 
            class="w-full text-center text-3xl font-semibold text-sky-500 mt-4" 
            data-lang="es">
            Resultados
        </h1>
        <h1 
            class="hidden w-full text-center text-3xl font-semibold text-sky-500 mt-4" 
            data-lang="pt">
            Resultados
        </h1>
        <h1 
            class="hidden w-full text-center text-3xl font-semibold text-sky-500 mt-4" 
            data-lang="en">
            Results
        </h1>
        <h1 
            class="hidden w-full text-center text-3xl font-semibold text-sky-500 mt-4" 
            data-lang="fr">
            Résultats
        </h1>
    </div>
    
    <div>
    <x-Objetive 
        :subtitle="[
            'es' => 'Consolidar el Observatorio de Cambio Climático (OCC) de la Macaronesia. Este ente permitirá analizar y promover las medidas de adaptación al cambio climático y establecer un marco de cooperación en la gestión de riesgos naturales provocados por el cambio climático en la región macaronésica y terceros países.',
            'pt' => 'Consolidar o Observatório das Alterações Climáticas (OCC) da Macaronésia. Este organismo permitirá analisar e promover medidas de adaptação às alterações climáticas e estabelecer um quadro de cooperação na gestão de riscos naturais provocados pelas alterações climáticas na região macaronésica e em países terceiros.',
            'en' => 'Consolidate the Climate Change Observatory (OCC) of Macaronesia. This entity will analyze and promote adaptation measures and establish a cooperation framework for managing natural risks caused by climate change in the Macaronesian region and third countries.',
            'fr' => 'Consolider l’Observatoire du Changement Climatique (OCC) de la Macaronésie. Cet organisme analysera et promouvra les mesures d’adaptation et établira un cadre de coopération pour la gestion des risques naturels causés par le changement climatique dans la région macaronésienne et les pays tiers.'
        ]"
    >
        @slot('title', [
            'es' => 'Objetivo Específico 1',
            'pt' => 'Objetivo Específico 1',
            'en' => 'Specific Objective 1',
            'fr' => 'Objectif Spécifique 1'
        ])
    </x-Objetive>

        <div class="flex flex-wrap gap-2 justify-center">
        <x-Result :text="[
            'es' => 'Una hoja de ruta conjunta para la consecución de la Estrategia Macaronésica de Adaptación al Cambio Climático.',
            'pt' => 'Uma folha de rota conjunta para a concretização da Estratégia Macaronésica de Adaptação às Alterações Climáticas.',
            'en' => 'A joint roadmap for achieving the Macaronesian Climate Change Adaptation Strategy.',
            'fr' => 'Une feuille de route commune pour la mise en œuvre de la Stratégie macaronésienne d’adaptation au changement climatique.',
        ]" />

        <x-Result :text="[
            'es' => 'Reuniones del Observatorio de Cambio Climático cada seis meses.',
            'pt' => 'Reuniões do Observatório das Alterações Climáticas a cada seis meses.',
            'en' => 'Climate Change Observatory meetings every six months.',
            'fr' => 'Réunions de l’Observatoire du Changement Climatique tous les six mois.',
        ]" />

        <x-Result :text="[
            'es' => 'Actualización del inventario sobre Cambio Climático para todas las regiones implicadas en las que se disponga de datos.',
            'pt' => 'Atualização do inventário sobre Alterações Climáticas para todas as regiões envolvidas onde existam dados disponíveis.',
            'en' => 'Update of the Climate Change inventory for all participating regions where data are available.',
            'fr' => 'Mise à jour de l’inventaire sur le changement climatique pour toutes les régions concernées disposant de données.',
        ]" />

        <x-Result :text="[
            'es' => 'Mantenimiento de un repositorio común y Base de Datos necesarias para la implementación de los escenarios.',
            'pt' => 'Manutenção de um repositório comum e base de dados necessários para a implementação dos cenários.',
            'en' => 'Maintenance of a common repository and database required for scenario implementation.',
            'fr' => 'Maintenance d’un référentiel commun et d’une base de données nécessaires à la mise en œuvre des scénarios.',
        ]" />

        <x-Result :text="[
            'es' => 'Desarrollo y promoción de planes de acción conjuntos.',
            'pt' => 'Desenvolvimento e promoção de planos de ação conjuntos.',
            'en' => 'Development and promotion of joint action plans.',
            'fr' => 'Développement et promotion de plans d’action conjoints.',
        ]" />


        </div>
    </div>

    <div class="mt-8">
    <x-Objetive 
        :title="[
            'es' => 'Objetivo Específico 2',
            'pt' => 'Objetivo Específico 2',
            'en' => 'Specific Objective 2',
            'fr' => 'Objectif Spécifique 2',
        ]"
        :subtitle="[
            'es' => 'Evaluar la evolución de los indicadores regionales de cambio climático en la región macaronésica (desde la atmósfera hasta el océano). Impactos y acciones de adaptación vinculadas a la vulnerabilidad de los ecosistemas y la sociedad.',
            'pt' => 'Avaliar a evolução dos indicadores regionais de alterações climáticas na região macaronésica (da atmosfera ao oceano). Impactos e ações de adaptação associados à vulnerabilidade dos ecossistemas e da sociedade.',
            'en' => 'Assess the evolution of regional climate change indicators in the Macaronesian region (from the atmosphere to the ocean). Impacts and adaptation actions linked to ecosystem and societal vulnerability.',
            'fr' => 'Évaluer l’évolution des indicateurs régionaux du changement climatique dans la région macaronésienne (de l’atmosphère à l’océan). Impacts et actions d’adaptation liés à la vulnérabilité des écosystèmes et de la société.',
        ]"
    />

        <div class="flex flex-wrap gap-2 justify-center">
        <x-Result :text="[
            'es' => 'Plan de colaboración científico-técnica entre las entidades.',
            'pt' => 'Plano de colaboração científico-técnica entre as entidades.',
            'en' => 'Scientific-technical collaboration plan among the entities.',
            'fr' => 'Plan de collaboration scientifique et technique entre les entités.',
        ]" />

        <x-Result :text="[
            'es' => 'Proyecciones climáticas a lo largo del S. XXI, en alta resolución espacio-temporal, para la región.',
            'pt' => 'Projeções climáticas ao longo do séc. XXI, em alta resolução espaço-temporal, para a região.',
            'en' => 'Climate projections throughout the 21st century, at high spatio-temporal resolution, for the region.',
            'fr' => 'Projections climatiques pour tout le XXIᵉ siècle, à haute résolution spatio-temporelle, pour la région.',
        ]" />

        <x-Result :text="[
            'es' => 'Monitorizar el sistema costero de CO2 en la región macaronésica.',
            'pt' => 'Monitorizar o sistema costeiro de CO₂ na região macaronésica.',
            'en' => 'Monitor the coastal CO₂ system in the Macaronesian region.',
            'fr' => 'Suivre le système côtier de CO₂ dans la région macaronésienne.',
        ]" />

        <x-Result :text="[
            'es' => 'Un estudio integrado sobre acidificación oceánica, emisiones de GEI y su cuantificación económica en la región.',
            'pt' => 'Um estudo integrado sobre acidificação do oceano, emissões de GEE e a sua quantificação económica na região.',
            'en' => 'An integrated study on ocean acidification, GHG emissions, and their economic quantification in the region.',
            'fr' => 'Une étude intégrée sur l’acidification des océans, les émissions de GES et leur quantification économique dans la région.',
        ]" />

        <x-Result :text="[
            'es' => 'Identificación de cuencas de alto riesgo en los distintos escenarios de cambio climático y tras incendios forestales.',
            'pt' => 'Identificação de bacias de alto risco nos diferentes cenários de alterações climáticas e após incêndios florestais.',
            'en' => 'Identification of high-risk catchments under different climate-change scenarios and after forest fires.',
            'fr' => 'Identification des bassins versants à haut risque selon différents scénarios de changement climatique et après des incendies de forêt.',
        ]" />

        </div>
    </div>

    
    <div class="mt-8">

    <x-Objetive 
        :title="[
            'es' => 'Objetivo Específico 3',
            'pt' => 'Objetivo Específico 3',
            'en' => 'Specific Objective 3',
            'fr' => 'Objectif Spécifique 3',
        ]"
        :subtitle="[
            'es' => 'Implementar acciones para la mejora del entendimiento científico y la coordinación entre las administraciones y las entidades sociales y económicas ante los riesgos asociados al cambio climático.',
            'pt' => 'Implementar ações para melhorar a compreensão científica e a coordenação entre as administrações e as entidades sociais e económicas face aos riscos associados às alterações climáticas.',
            'en' => 'Implement actions to improve scientific understanding and coordination between administrations and social and economic entities in relation to risks associated with climate change.',
            'fr' => 'Mettre en œuvre des actions visant à améliorer la compréhension scientifique et la coordination entre les administrations et les acteurs sociaux et économiques face aux risques liés au changement climatique.',
        ]"
    />

        <div class="flex flex-wrap gap-2 justify-center">
        <x-Result :text="[
            'es' => 'Formación sobre medidas de adaptación de territorios rurales y urbanos a eventos climáticos extremos.',
            'pt' => 'Formação sobre medidas de adaptação de territórios rurais e urbanos a eventos climáticos extremos.',
            'en' => 'Training on adaptation measures for rural and urban areas to extreme climate events.',
            'fr' => 'Formation sur les mesures d’adaptation des territoires ruraux et urbains aux événements climatiques extrêmes.',
        ]" />

        <x-Result :text="[
            'es' => 'Crear la red de ciencia ciudadana PLANCLIMAC, con más de 500 usuarios en todo el territorio de cooperación MAC.',
            'pt' => 'Criar a rede de ciência cidadã PLANCLIMAC, com mais de 500 utilizadores em todo o território de cooperação MAC.',
            'en' => 'Create the PLANCLIMAC citizen science network, with more than 500 users across the MAC cooperation area.',
            'fr' => 'Créer le réseau de science citoyenne PLANCLIMAC, avec plus de 500 utilisateurs dans toute la zone de coopération MAC.',
        ]" />

        <x-Result :text="[
            'es' => 'Mapeo de las oportunidades de empleo y negocios verdes en el espacio MAC de cooperación.',
            'pt' => 'Mapeamento das oportunidades de emprego e negócios verdes no espaço de cooperação MAC.',
            'en' => 'Mapping of green jobs and business opportunities in the MAC cooperation area.',
            'fr' => 'Cartographie des opportunités d’emplois et d’entreprises vertes dans l’espace de coopération MAC.',
        ]" />

        <x-Result :text="[
            'es' => 'Actividades de networking (reuniones y capacitaciones) con diferentes agentes.',
            'pt' => 'Atividades de networking (reuniões e capacitações) com diferentes agentes.',
            'en' => 'Networking activities (meetings and training) with different stakeholders.',
            'fr' => 'Activités de réseautage (réunions et formations) avec différents acteurs.',
        ]" />

        <x-Result :text="[
            'es' => 'Análisis de la vulnerabilidad, exposición y peligrosidad de Canarias ante el cambio climático.',
            'pt' => 'Análise da vulnerabilidade, exposição e perigosidade das Canárias face às alterações climáticas.',
            'en' => 'Analysis of the vulnerability, exposure and hazard of the Canary Islands to climate change.',
            'fr' => 'Analyse de la vulnérabilité, de l’exposition et de la dangerosité des îles Canaries face au changement climatique.',
        ]" />

        </div>
    </div>
</section>
@endsection