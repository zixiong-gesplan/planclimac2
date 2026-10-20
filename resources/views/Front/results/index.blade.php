@extends('layouts.app')

@section('title', 'PLANCLIMAC2 | Objetivos y productos')

@section('content')
<div class="section-container results-story-page py-8 sm:py-12">
    <header class="results-story-header">
        <p class="section-eyebrow">
            <span data-container="translator">
                <span data-lang="es">Objetivos del proyecto</span>
                <span class="hidden" data-lang="pt">Objetivos do projeto</span>
                <span class="hidden" data-lang="en">Project objectives</span>
                <span class="hidden" data-lang="fr">Objectifs du projet</span>
            </span>
        </p>
        <h1 class="section-title mt-2">
            <span data-container="translator">
                <span data-lang="es">Objetivos y productos de PLANCLIMAC2</span>
                <span class="hidden" data-lang="pt">Objetivos e produtos do PLANCLIMAC2</span>
                <span class="hidden" data-lang="en">PLANCLIMAC2 objectives and products</span>
                <span class="hidden" data-lang="fr">Objectifs et produits de PLANCLIMAC2</span>
            </span>
        </h1>
        <p class="results-story-lead">
            <span data-container="translator">
                <span data-lang="es">Regiones e instituciones de la Macaronesia colaboran para observar el clima y estudiar sus cambios. El proyecto prepara medidas de adaptación para la región.</span>
                <span class="hidden" data-lang="pt">Regiões e instituições da Macaronésia colaboram para observar o clima e estudar as suas mudanças. O projeto prepara medidas de adaptação para a região.</span>
                <span class="hidden" data-lang="en">Regions and institutions across Macaronesia work together to monitor the climate and study its changes. The project prepares adaptation measures for the region.</span>
                <span class="hidden" data-lang="fr">Les régions et institutions de la Macaronésie coopèrent pour observer le climat et étudier ses évolutions. Le projet prépare des mesures d’adaptation pour la région.</span>
            </span>
        </p>

        <span id="results-chapter-nav-label" class="sr-only" data-container="translator">
                <span data-lang="es">Ir al capítulo</span><span class="hidden" data-lang="pt">Ir ao capítulo</span><span class="hidden" data-lang="en">Go to chapter</span><span class="hidden" data-lang="fr">Aller au chapitre</span>
        </span>
        <nav class="results-chapter-nav" aria-labelledby="results-chapter-nav-label">
            <a href="#objective-1" class="results-chapter-nav-link" aria-current="location"><span aria-hidden="true">01</span><span data-container="translator"><span data-lang="es">Observatorio</span><span class="hidden" data-lang="pt">Observatório</span><span class="hidden" data-lang="en">Observatory</span><span class="hidden" data-lang="fr">Observatoire</span></span></a>
            <a href="#objective-2" class="results-chapter-nav-link"><span aria-hidden="true">02</span><span data-container="translator"><span data-lang="es">Proyecciones</span><span class="hidden" data-lang="pt">Projeções</span><span class="hidden" data-lang="en">Projections</span><span class="hidden" data-lang="fr">Projections</span></span></a>
            <a href="#objective-3" class="results-chapter-nav-link"><span aria-hidden="true">03</span><span data-container="translator"><span data-lang="es">Adaptación</span><span class="hidden" data-lang="pt">Adaptação</span><span class="hidden" data-lang="en">Adaptation</span><span class="hidden" data-lang="fr">Adaptation</span></span></a>
        </nav>
    </header>

    <aside class="results-story-note">
        <span class="results-story-note-mark" aria-hidden="true">i</span>
        <p data-container="translator">
            <span data-lang="es">La página recoge los productos previstos en los objetivos. Actualizaremos su estado cuando tengamos información verificada.</span>
            <span class="hidden" data-lang="pt">Esta página reúne os produtos previstos nos objetivos. Atualizaremos o seu estado quando tivermos informação verificada.</span>
            <span class="hidden" data-lang="en">This page lists the products set out in the objectives. We will update their status when verified information is available.</span>
            <span class="hidden" data-lang="fr">Cette page présente les produits prévus dans les objectifs. Nous mettrons leur état à jour lorsque nous disposerons d’informations vérifiées.</span>
        </p>
    </aside>

    <h2 id="results-chapters-label" class="sr-only" data-container="translator">
        <span data-lang="es">Objetivos y productos del proyecto</span><span class="hidden" data-lang="pt">Objetivos e produtos do projeto</span><span class="hidden" data-lang="en">Project objectives and products</span><span class="hidden" data-lang="fr">Objectifs et produits du projet</span>
    </h2>
    <section class="results-chapters" aria-labelledby="results-chapters-label">
        <article id="objective-1" class="results-chapter" aria-labelledby="objective-1-title">
            <div class="results-chapter-stage">
                <figure class="results-chapter-visual">
                    <img src="{{ asset('images/objective-cooperation.svg') }}" alt="" width="720" height="420" loading="lazy" decoding="async">
                </figure>
                <div class="results-chapter-content">
                    <p class="results-chapter-eyebrow">
                        <span class="results-chapter-index" aria-hidden="true">01</span>
                        <span data-container="translator">
                            <span data-lang="es">Objetivo 1 · Observatorio y cooperación</span><span class="hidden" data-lang="pt">Objetivo 1 · Observatório e cooperação</span><span class="hidden" data-lang="en">Objective 1 · Observatory and cooperation</span><span class="hidden" data-lang="fr">Objectif 1 · Observatoire et coopération</span>
                        </span>
                    </p>
                    <h2 id="objective-1-title" class="results-chapter-title">
                        <span data-container="translator">
                            <span data-lang="es">El Observatorio de Cambio Climático de la Macaronesia</span><span class="hidden" data-lang="pt">O Observatório das Alterações Climáticas da Macaronésia</span><span class="hidden" data-lang="en">The Macaronesia Climate Change Observatory</span><span class="hidden" data-lang="fr">L’Observatoire du Changement Climatique de la Macaronésie</span>
                        </span>
                    </h2>
                    <p class="results-chapter-description" data-container="translator">
                        <span data-lang="es">El proyecto consolidará el Observatorio de Cambio Climático (OCC) de Macaronesia. El OCC analizará y promoverá medidas de adaptación, y establecerá un marco de cooperación para gestionar riesgos naturales asociados al cambio climático en la región y terceros países.</span>
                        <span class="hidden" data-lang="pt">O projeto consolidará o Observatório das Alterações Climáticas (OCC) da Macaronésia. O OCC analisará e promoverá medidas de adaptação e estabelecerá um quadro de cooperação para gerir os riscos naturais associados às alterações climáticas na região e em países terceiros.</span>
                        <span class="hidden" data-lang="en">The project will consolidate the Macaronesia Climate Change Observatory (OCC). The OCC will assess and promote adaptation measures and establish a cooperation framework to manage natural risks linked to climate change in the region and third countries.</span>
                        <span class="hidden" data-lang="fr">Le projet consolidera l’Observatoire du Changement Climatique (OCC) de la Macaronésie. L’OCC analysera et promouvra des mesures d’adaptation, et établira un cadre de coopération pour gérer les risques naturels liés au changement climatique dans la région et les pays tiers.</span>
                    </p>
                </div>
            </div>

            <div class="results-products">
                <h3 class="results-products-heading" data-container="translator">
                    <span data-lang="es">Productos previstos</span><span class="hidden" data-lang="pt">Produtos previstos</span><span class="hidden" data-lang="en">Planned products</span><span class="hidden" data-lang="fr">Produits prévus</span>
                </h3>
                <ul class="results-product-grid">
                    <x-Result :text="['es' => 'Elaborar una hoja de ruta conjunta para aplicar la Estrategia Macaronésica de Adaptación al Cambio Climático.', 'pt' => 'Elaborar um roteiro conjunto para aplicar a Estratégia Macaronésica de Adaptação às Alterações Climáticas.', 'en' => 'Develop a joint roadmap to implement the Macaronesian Climate Change Adaptation Strategy.', 'fr' => 'Élaborer une feuille de route commune pour mettre en œuvre la Stratégie macaronésienne d’adaptation au changement climatique.']" />
                    <x-Result :text="['es' => 'Celebrar reuniones del Observatorio de Cambio Climático cada seis meses.', 'pt' => 'Realizar reuniões do Observatório das Alterações Climáticas a cada seis meses.', 'en' => 'Hold Climate Change Observatory meetings every six months.', 'fr' => 'Organiser des réunions de l’Observatoire du Changement Climatique tous les six mois.']" />
                    <x-Result :text="['es' => 'Actualizar el inventario de cambio climático en las regiones participantes que dispongan de datos.', 'pt' => 'Atualizar o inventário sobre alterações climáticas nas regiões participantes que disponham de dados.', 'en' => 'Update the climate change inventory for participating regions with available data.', 'fr' => 'Mettre à jour l’inventaire du changement climatique dans les régions participantes disposant de données.']" />
                    <x-Result :text="['es' => 'Mantener un repositorio común y la base de datos necesaria para elaborar los escenarios.', 'pt' => 'Manter um repositório comum e a base de dados necessária para elaborar os cenários.', 'en' => 'Maintain a shared repository and the database needed to develop the scenarios.', 'fr' => 'Maintenir un référentiel commun et la base de données nécessaire à l’élaboration des scénarios.']" />
                    <x-Result :text="['es' => 'Desarrollar y promover planes de acción conjuntos.', 'pt' => 'Desenvolver e promover planos de ação conjuntos.', 'en' => 'Develop and promote joint action plans.', 'fr' => 'Développer et promouvoir des plans d’action communs.']" />
                </ul>
            </div>
        </article>

        <article id="objective-2" class="results-chapter" aria-labelledby="objective-2-title">
            <div class="results-chapter-stage">
                <figure class="results-chapter-visual">
                    <img src="{{ asset('images/objective-climate-science.svg') }}" alt="" width="720" height="420" loading="lazy" decoding="async">
                </figure>
                <div class="results-chapter-content">
                    <p class="results-chapter-eyebrow">
                        <span class="results-chapter-index" aria-hidden="true">02</span>
                        <span data-container="translator">
                            <span data-lang="es">Objetivo 2 · Proyecciones e impactos</span><span class="hidden" data-lang="pt">Objetivo 2 · Projeções e impactos</span><span class="hidden" data-lang="en">Objective 2 · Projections and impacts</span><span class="hidden" data-lang="fr">Objectif 2 · Projections et impacts</span>
                        </span>
                    </p>
                    <h2 id="objective-2-title" class="results-chapter-title">
                        <span data-container="translator">
                            <span data-lang="es">Proyecciones climáticas para Macaronesia</span><span class="hidden" data-lang="pt">Projeções climáticas para a Macaronésia</span><span class="hidden" data-lang="en">Climate projections for Macaronesia</span><span class="hidden" data-lang="fr">Projections climatiques pour la Macaronésie</span>
                        </span>
                    </h2>
                    <p class="results-chapter-description" data-container="translator">
                        <span data-lang="es">El proyecto evaluará cómo evolucionan los indicadores regionales del cambio climático, desde la atmósfera hasta el océano. También estudiará los impactos y las medidas de adaptación vinculados a la vulnerabilidad de los ecosistemas y la sociedad.</span>
                        <span class="hidden" data-lang="pt">O projeto avaliará a evolução dos indicadores regionais das alterações climáticas, da atmosfera ao oceano. Também estudará os impactos e as medidas de adaptação associados à vulnerabilidade dos ecossistemas e da sociedade.</span>
                        <span class="hidden" data-lang="en">The project will assess how regional climate change indicators evolve, from the atmosphere to the ocean. It will also study impacts and adaptation measures linked to the vulnerability of ecosystems and society.</span>
                        <span class="hidden" data-lang="fr">Le projet évaluera l’évolution des indicateurs régionaux du changement climatique, de l’atmosphère à l’océan. Il étudiera aussi les impacts et les mesures d’adaptation liés à la vulnérabilité des écosystèmes et de la société.</span>
                    </p>
                </div>
            </div>

            <div class="results-products">
                <h3 class="results-products-heading" data-container="translator">
                    <span data-lang="es">Productos previstos</span><span class="hidden" data-lang="pt">Produtos previstos</span><span class="hidden" data-lang="en">Planned products</span><span class="hidden" data-lang="fr">Produits prévus</span>
                </h3>
                <ul class="results-product-grid">
                    <x-Result :text="['es' => 'Elaborar un plan de colaboración científico-técnica entre las entidades.', 'pt' => 'Elaborar um plano de colaboração científico-técnica entre as entidades.', 'en' => 'Develop a scientific and technical collaboration plan among the partners.', 'fr' => 'Élaborer un plan de collaboration scientifique et technique entre les entités.']" />
                    <x-Result :text="['es' => 'Elaborar proyecciones climáticas para la región durante el siglo XXI, con alta resolución espacial y temporal.', 'pt' => 'Elaborar projeções climáticas para a região ao longo do século XXI, com alta resolução espacial e temporal.', 'en' => 'Produce high-resolution climate projections for the region throughout the 21st century.', 'fr' => 'Élaborer des projections climatiques à haute résolution spatiale et temporelle pour la région au cours du XXIᵉ siècle.']" />
                    <x-Result :text="['es' => 'Monitorizar el sistema costero de CO₂ en Macaronesia.', 'pt' => 'Monitorizar o sistema costeiro de CO₂ na Macaronésia.', 'en' => 'Monitor the coastal CO₂ system in Macaronesia.', 'fr' => 'Suivre le système côtier de CO₂ en Macaronésie.']" />
                    <x-Result :text="['es' => 'Realizar un estudio integrado sobre acidificación oceánica, emisiones de GEI y su cuantificación económica en la región.', 'pt' => 'Realizar um estudo integrado sobre acidificação dos oceanos, emissões de GEE e a sua quantificação económica na região.', 'en' => 'Conduct an integrated study on ocean acidification, GHG emissions and their economic quantification in the region.', 'fr' => 'Mener une étude intégrée sur l’acidification des océans, les émissions de GES et leur quantification économique dans la région.']" />
                    <x-Result :text="['es' => 'Identificar cuencas de alto riesgo en distintos escenarios climáticos y después de incendios forestales.', 'pt' => 'Identificar bacias de alto risco em diferentes cenários climáticos e após incêndios florestais.', 'en' => 'Identify high-risk catchments under different climate scenarios and after forest fires.', 'fr' => 'Identifier les bassins versants à haut risque selon différents scénarios climatiques et après des incendies de forêt.']" />
                </ul>
            </div>
        </article>

        <article id="objective-3" class="results-chapter" aria-labelledby="objective-3-title">
            <div class="results-chapter-stage">
                <figure class="results-chapter-visual">
                    <img src="{{ asset('images/objective-citizen-science.svg') }}" alt="" width="720" height="420" loading="lazy" decoding="async">
                </figure>
                <div class="results-chapter-content">
                    <p class="results-chapter-eyebrow">
                        <span class="results-chapter-index" aria-hidden="true">03</span>
                        <span data-container="translator">
                            <span data-lang="es">Objetivo 3 · Formación y participación</span><span class="hidden" data-lang="pt">Objetivo 3 · Formação e participação</span><span class="hidden" data-lang="en">Objective 3 · Training and participation</span><span class="hidden" data-lang="fr">Objectif 3 · Formation et participation</span>
                        </span>
                    </p>
                    <h2 id="objective-3-title" class="results-chapter-title">
                        <span data-container="translator">
                            <span data-lang="es">Formación y ciencia ciudadana para la adaptación</span><span class="hidden" data-lang="pt">Formação e ciência cidadã para a adaptação</span><span class="hidden" data-lang="en">Training and citizen science for adaptation</span><span class="hidden" data-lang="fr">Formation et science citoyenne pour l’adaptation</span>
                        </span>
                    </h2>
                    <p class="results-chapter-description" data-container="translator">
                        <span data-lang="es">El proyecto pondrá en marcha acciones para mejorar la comprensión científica del cambio climático y reforzar la coordinación entre administraciones y entidades sociales y económicas ante sus riesgos.</span>
                        <span class="hidden" data-lang="pt">O projeto implementará ações para melhorar a compreensão científica das alterações climáticas e reforçar a coordenação entre administrações e entidades sociais e económicas perante os seus riscos.</span>
                        <span class="hidden" data-lang="en">The project will carry out actions to improve scientific understanding of climate change and strengthen coordination between public administrations and social and economic organisations in response to related risks.</span>
                        <span class="hidden" data-lang="fr">Le projet mettra en œuvre des actions pour améliorer la compréhension scientifique du changement climatique et renforcer la coordination entre les administrations et les organismes sociaux et économiques face aux risques associés.</span>
                    </p>
                </div>
            </div>

            <div class="results-products">
                <h3 class="results-products-heading" data-container="translator">
                    <span data-lang="es">Productos previstos</span><span class="hidden" data-lang="pt">Produtos previstos</span><span class="hidden" data-lang="en">Planned products</span><span class="hidden" data-lang="fr">Produits prévus</span>
                </h3>
                <ul class="results-product-grid">
                    <x-Result :text="['es' => 'Ofrecer formación sobre medidas de adaptación para territorios rurales y urbanos ante eventos climáticos extremos.', 'pt' => 'Promover formação sobre medidas de adaptação para territórios rurais e urbanos perante eventos climáticos extremos.', 'en' => 'Provide training in adaptation measures for rural and urban areas facing extreme climate events.', 'fr' => 'Proposer des formations aux mesures d’adaptation des territoires ruraux et urbains face aux événements climatiques extrêmes.']" />
                    <x-Result :text="['es' => 'Crear la red PLANCLIMAC de ciencia ciudadana, con más de 500 usuarios en el espacio de cooperación MAC.', 'pt' => 'Criar a rede PLANCLIMAC de ciência cidadã, com mais de 500 utilizadores no espaço de cooperação MAC.', 'en' => 'Create the PLANCLIMAC citizen science network, with more than 500 users across the MAC cooperation area.', 'fr' => 'Créer le réseau de science citoyenne PLANCLIMAC, avec plus de 500 utilisateurs dans l’espace de coopération MAC.']" />
                    <x-Result :text="['es' => 'Identificar oportunidades de empleo y negocios verdes en el espacio de cooperación MAC.', 'pt' => 'Identificar oportunidades de emprego e negócios verdes no espaço de cooperação MAC.', 'en' => 'Identify green jobs and business opportunities across the MAC cooperation area.', 'fr' => 'Identifier des possibilités d’emploi et d’activités économiques vertes dans l’espace de coopération MAC.']" />
                    <x-Result :text="['es' => 'Organizar reuniones y actividades de formación con distintos agentes.', 'pt' => 'Organizar reuniões e ações de formação com diferentes agentes.', 'en' => 'Organise meetings and training activities with different stakeholders.', 'fr' => 'Organiser des réunions et des formations avec différents acteurs.']" />
                    <x-Result :text="['es' => 'Analizar la vulnerabilidad, la exposición y la peligrosidad de Canarias ante el cambio climático.', 'pt' => 'Analisar a vulnerabilidade, a exposição e a perigosidade das Canárias face às alterações climáticas.', 'en' => 'Assess the Canary Islands’ vulnerability, exposure and climate-related hazards.', 'fr' => 'Analyser la vulnérabilité, l’exposition et les aléas climatiques aux îles Canaries.']" />
                </ul>
            </div>
        </article>
    </section>

    <aside class="results-story-next">
        <div>
            <h2 class="results-story-next-title" data-container="translator">
                <span data-lang="es">Indicadores del proyecto</span><span class="hidden" data-lang="pt">Indicadores do projeto</span><span class="hidden" data-lang="en">Project indicators</span><span class="hidden" data-lang="fr">Indicateurs du projet</span>
            </h2>
        </div>
        <a href="{{ url('/statistics') }}" class="results-story-cta">
            <span data-container="translator"><span data-lang="es">Consultar indicadores</span><span class="hidden" data-lang="pt">Consultar indicadores</span><span class="hidden" data-lang="en">View indicators</span><span class="hidden" data-lang="fr">Voir les indicateurs</span></span>
            <span aria-hidden="true">→</span>
        </a>
    </aside>
</div>
@endsection
