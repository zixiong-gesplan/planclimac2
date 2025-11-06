<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\Auth\AuthController;
use Illuminate\Http\Request;
use App\Models\Visitor;
use App\Http\Middleware\AuthSession;
use App\Http\Middleware\TrackVisitors;

Route::middleware(TrackVisitors::class)->group(function (){
    Route::get('/', function (Request $request) {
        $labelCards = array(
            [
                'label' => '3.045.442,75 €',
                'description' =>'Presupuesto para la ejecución'
            ],
            [
                'label' => '48 meses',
                'description' => 'Duración del proyecto 2025-2028'
            ],
            [
                'label' => '85%',
                'description' => 'Co-financiación por el Programa de Cooperacion Interreg Madeira-Azores-Canarias (MAC) 2021-2027'
            ],
            [
                'label' => 'Prioridad 2 - MAC Verde',
                'description' => 'Transición ecológica, apoyo al desarrollo de una economía verde y azul, lucha contra el cambio climático, prevención y gestion de riesgos y emergencias'
            ]
        ); 
        
        $objectives = [
            [
                'title' => [
                    'es' => 'Objetivo específico 1 del proyecto',
                    'pt' => 'Objetivo específico 1 do projeto',
                    'en' => 'Project Specific Objective 1',
                    'fr' => 'Objectif spécifique 1 du projet',
                ],
                'description' => [
                    'es' => 'Consolidar el Observatorio de Cambio Climático (OCC) de la Macaronesia. Este ente permitirá analizar y promover las medidas de adaptación al cambio climático y establecer un marco de cooperación en la gestión de riesgos naturales provocados por el cambio climático en la región macaronésica y terceros países.',
                    'pt' => 'Consolidar o Observatório de Alterações Climáticas (OCC) da Macaronésia. Este organismo permitirá analisar e promover medidas de adaptação às alterações climáticas e estabelecer um quadro de cooperação na gestão de riscos naturais provocados pelas alterações climáticas na região macaronésica e em países terceiros.',
                    'en' => 'Consolidate the Macaronesian Climate Change Observatory (OCC). This body will enable the analysis and promotion of climate change adaptation measures and establish a cooperation framework for managing natural risks caused by climate change in the Macaronesian region and third countries.',
                    'fr' => 'Consolider l’Observatoire du Changement Climatique (OCC) de la Macaronésie. Cet organisme permettra d’analyser et de promouvoir les mesures d’adaptation au changement climatique et d’établir un cadre de coopération pour la gestion des risques naturels induits par le changement climatique dans la région macaronésienne et les pays tiers.',
                ],
                'activities' => [
                    [
                        'id' => '1.1',
                        'description' => [
                            'es' => 'Desarrollo de una Estrategia Macaronésica de Adaptación al CC impulsada desde el OCC a través de buenas prácticas: integración de Terceros Países.',
                            'pt' => 'Desenvolvimento de uma Estratégia Macaronésica de Adaptação às AC, promovida pelo OCC com base em boas práticas: integração de Países Terceiros.',
                            'en' => 'Development of a Macaronesian Climate Change Adaptation Strategy led by the OCC through good practices: integration of third countries.',
                            'fr' => 'Élaboration d’une stratégie macaronésienne d’adaptation au changement climatique, pilotée par l’OCC à partir de bonnes pratiques : intégration des pays tiers.',
                        ],
                    ],
                    [
                        'id' => '1.2',
                        'description' => [
                            'es' => 'Implementación de un Atlas Climático para la Macaronesia que permita la transferencia desde el conocimiento a la sociedad y las instituciones públicas.',
                            'pt' => 'Implementação de um Atlas Climático para a Macaronésia que permita a transferência de conhecimento para a sociedade e as instituições públicas.',
                            'en' => 'Implementation of a Climate Atlas for Macaronesia to enable knowledge transfer to society and public institutions.',
                            'fr' => 'Mise en œuvre d’un Atlas climatique pour la Macaronésie afin de faciliter le transfert de connaissances à la société et aux institutions publiques.',
                        ],
                    ],
                    [
                        'id' => '1.3',
                        'description' => [
                            'es' => 'Desarrollo de una propuesta común de indicadores sobre Cambio Climático (de tipo ambiental y socioeconómico) para toda la Región Macaronésica.',
                            'pt' => 'Desenvolvimento de uma proposta comum de indicadores sobre alterações climáticas (ambientais e socioeconómicos) para toda a região macaronésica.',
                            'en' => 'Development of a common set of climate change indicators (environmental and socio-economic) for the entire Macaronesian region.',
                            'fr' => 'Élaboration d’une proposition commune d’indicateurs de changement climatique (environnementaux et socio-économiques) pour l’ensemble de la région macaronésienne.',
                        ],
                    ],
                ],
            ],
            [
                'title' => [
                    'es' => 'Objetivo específico 2 del proyecto',
                    'pt' => 'Objetivo específico 2 do projeto',
                    'en' => 'Project Specific Objective 2',
                    'fr' => 'Objectif spécifique 2 du projet',
                ],
                'description' => [
                    'es' => 'Evaluar la evolución de los indicadores regionales de cambio climático en la región macaronésica (desde la atmósfera hasta el océano). Impactos y acciones de adaptación vinculadas a la vulnerabilidad de los ecosistemas y la sociedad.',
                    'pt' => 'Avaliar a evolução dos indicadores regionais de alterações climáticas na região macaronésica (da atmosfera ao oceano). Impactos e ações de adaptação ligados à vulnerabilidade dos ecossistemas e da sociedade.',
                    'en' => 'Assess the evolution of regional climate change indicators in the Macaronesian region (from the atmosphere to the ocean). Impacts and adaptation actions linked to ecosystem and societal vulnerability.',
                    'fr' => 'Évaluer l’évolution des indicateurs régionaux du changement climatique dans la région macaronésienne (de l’atmosphère à l’océan). Impacts et actions d’adaptation liés à la vulnérabilité des écosystèmes et de la société.',
                ],
                'activities' => [
                    [
                        'id' => '2.1',
                        'description' => [
                            'es' => 'Desarrollo de regionalizaciones climáticas dinámicas usando los diferentes escenarios y los indicadores consolidados en todo el área de actuación.',
                            'pt' => 'Desenvolvimento de regionalizações climáticas dinâmicas utilizando diferentes cenários e os indicadores consolidados em toda a área de atuação.',
                            'en' => 'Development of dynamic climate regionalisations using different scenarios and the consolidated indicators across the entire area of intervention.',
                            'fr' => 'Développement de régionalisations climatiques dynamiques en utilisant différents scénarios et les indicateurs consolidés sur l’ensemble de la zone d’intervention.',
                        ],
                    ],
                    [
                        'id' => '2.2',
                        'description' => [
                            'es' => 'Análisis de la evolución del sistema del CO2 en el océano e indicadores de CC a través de series temporales, bases de datos y datos satelitales.',
                            'pt' => 'Análise da evolução do sistema de CO2 no oceano e dos indicadores de AC através de séries temporais, bases de dados e dados de satélite.',
                            'en' => 'Analysis of the evolution of the oceanic CO2 system and climate-change indicators using time series, databases and satellite data.',
                            'fr' => 'Analyse de l’évolution du système de CO2 océanique et des indicateurs de changement climatique à partir de séries temporelles, de bases de données et de données satellitaires.',
                        ],
                    ],
                    [
                        'id' => '2.3',
                        'description' => [
                            'es' => 'Evaluación de impactos: caracterización de la erosividad de la lluvia; incidencia del CC en la escorrentía y pérdida de suelo por erosión.',
                            'pt' => 'Avaliação de impactos: caracterização da erosividade da chuva; incidência das AC no escoamento e na perda de solo por erosão.',
                            'en' => 'Impact assessment: characterisation of rainfall erosivity; effect of climate change on runoff and soil loss by erosion.',
                            'fr' => 'Évaluation des impacts : caractérisation de l’érosivité des précipitations ; incidence du changement climatique sur le ruissellement et la perte de sol par érosion.',
                        ],
                    ],
                ],
            ],
            [
                'title' => [
                    'es' => 'Objetivo específico 3 del proyecto',
                    'pt' => 'Objetivo específico 3 do projeto',
                    'en' => 'Project Specific Objective 3',
                    'fr' => 'Objectif spécifique 3 du projet',
                ],
                'description' => [
                    'es' => 'Implementar acciones para la mejora del entendimiento científico y la coordinación entre las administraciones y las entidades sociales y económicas ante los riesgos asociados al cambio climático.',
                    'pt' => 'Implementar ações para melhorar o entendimento científico e a coordenação entre as administrações e as entidades sociais e económicas face aos riscos associados às alterações climáticas.',
                    'en' => 'Implement actions to improve scientific understanding and coordination among public administrations and social and economic stakeholders in the face of risks associated with climate change.',
                    'fr' => 'Mettre en œuvre des actions visant à améliorer la compréhension scientifique et la coordination entre les administrations publiques et les acteurs sociaux et économiques face aux risques liés au changement climatique.',
                ],
                'activities' => [
                    [
                        'id' => '3.1',
                        'description' => [
                            'es' => 'Programa de fomento de la ciencia ciudadana sobre acción climática y capacitación técnica sobre impactos y adaptación al cambio climático.',
                            'pt' => 'Programa de promoção da ciência cidadã sobre ação climática e capacitação técnica sobre impactos e adaptação às alterações climáticas.',
                            'en' => 'Programme to promote citizen science on climate action and technical training on climate-change impacts and adaptation.',
                            'fr' => 'Programme de promotion de la science citoyenne sur l’action climatique et de formation technique sur les impacts et l’adaptation au changement climatique.',
                        ],
                    ],
                    [
                        'id' => '3.2',
                        'description' => [
                            'es' => 'Optimización de oportunidades de actividad y empleo en la transición hacia una economía verde y minimización de los impactos socioeconómicos.',
                            'pt' => 'Otimização de oportunidades de atividade e emprego na transição para uma economia verde e minimização dos impactos socioeconómicos.',
                            'en' => 'Optimisation of activity and employment opportunities in the transition to a green economy, minimising socio-economic impacts.',
                            'fr' => 'Optimisation des opportunités d’activité et d’emploi dans la transition vers une économie verte, en minimisant les impacts socio-économiques.',
                        ],
                    ],
                    [
                        'id' => '3.3',
                        'description' => [
                            'es' => 'Desarrollo de herramientas de aprendizaje para evaluar riesgos y oportunidades y mejorar las decisiones de inversión ante los riesgos climáticos.',
                            'pt' => 'Desenvolvimento de ferramentas de aprendizagem para avaliar riscos e oportunidades e melhorar as decisões de investimento face aos riscos climáticos.',
                            'en' => 'Development of learning tools to assess risks and opportunities and improve investment decisions in the face of climate risks.',
                            'fr' => 'Développement d’outils d’apprentissage pour évaluer les risques et les opportunités et améliorer les décisions d’investissement face aux risques climatiques.',
                        ],
                    ],
                ],
            ],
        ];             
    
        $results = [
            [
                'title' => [
                    'es' => 'Estudios realizados',
                    'pt' => 'Estudos realizados',
                    'en' => 'Studies carried out',
                    'fr' => 'Études réalisées',
                ],
                'progress' => 0,
                'target' => 15
            ],
            [
                'title' => [
                    'es' => 'Investigadores',
                    'pt' => 'Investigadores',
                    'en' => 'Researchers',
                    'fr' => 'Chercheurs',
                ],
                'progress' => 0,
                'target' => 5
            ],
            [
                'title' => [
                    'es' => 'Reuniones de seguimiento',
                    'pt' => 'Reuniões de acompanhamento',
                    'en' => 'Follow-up meetings',
                    'fr' => 'Réunions de suivi',
                ],
                'progress' => 0,
                'target' => 5
            ],
            [
                'title' => [
                    'es' => 'Participantes en eventos',
                    'pt' => 'Participantes em eventos',
                    'en' => 'Event participants',
                    'fr' => 'Participants aux événements',
                ],
                'progress' => 0,
                'target' => 400
            ],
            [
                'title' => [
                    'es' => 'Publicaciones científicas',
                    'pt' => 'Publicações científicas',
                    'en' => 'Scientific publications',
                    'fr' => 'Publications scientifiques',
                ],
                'progress' => 0,
                'target' => 3
            ],
            [
                'title' => [
                    'es' => 'Visitas a la web del proyecto',
                    'pt' => 'Visitas ao site do projeto',
                    'en' => 'Visits to the project website',
                    'fr' => 'Visites sur le site web du projet',
                ],
                'progress' => Visitor::count(),
                'target' => 5000
            ],
            [
                'title' => [
                    'es' => 'Actos de difusión',
                    'pt' => 'Ações de divulgação',
                    'en' => 'Dissemination events',
                    'fr' => 'Actions de diffusion',
                ],
                'progress' => 0,
                'target' => 15
            ],
            [
                'title' => [
                    'es' => 'Nº de indicadores de vulnerabilidad ante el cambio climático desarrollados',
                    'pt' => 'Nº de indicadores de vulnerabilidade às alterações climáticas desenvolvidos',
                    'en' => 'Number of climate change vulnerability indicators developed',
                    'fr' => 'Nombre d’indicateurs de vulnérabilité au changement climatique développés',
                ],
                'progress' => 0,
                'target' => 4
            ]
        ]; 
        return view('Front.home.index', [
            'labelCards'    => $labelCards,
            'objectives'    => $objectives,
            'results'       => $results,
        ]);
    });
    Route::resource('/news', NewsController::class);
    Route::get('/statistics', function(){
        $indicators = [
            [
                'title' => [
                    'es' => 'Indicadores de realización',
                    'pt' => 'Indicadores de realização',
                    'en' => 'Output indicators',
                    'fr' => 'Indicateurs de réalisation',
                ],
                'goals' => [
                    [
                        'title' => [
                            'es' => 'RCO 83 - Estrategias y planes de acción desarrollados conjuntamente.',
                            'pt' => 'RCO 83 - Estratégias e planos de ação desenvolvidos em conjunto.',
                            'en' => 'RCO 83 - Strategies and action plans jointly developed.',
                            'fr' => 'RCO 83 - Stratégies et plans d’action élaborés conjointement.',
                        ],
                        'progress' => 0,
                        'target' => 1
                    ],
                    [
                        'title' => [
                            'es' => 'RCO 84 - Actividades piloto desarrolladas conjuntamente y ejecutadas en el proyecto.',
                            'pt' => 'RCO 84 - Atividades-piloto desenvolvidas em conjunto e executadas no projeto.',
                            'en' => 'RCO 84 - Pilot activities jointly developed and implemented in the project.',
                            'fr' => 'RCO 84 - Activités pilotes élaborées conjointement et mises en œuvre dans le projet.',
                        ],
                        'progress' => 0,
                        'target' => 2
                    ],
                    [
                        'title' => [
                            'es' => 'RCO 87 - Organizaciones que cooperan a través de las fronteras.',
                            'pt' => 'RCO 87 - Organizações que cooperam além-fronteiras.',
                            'en' => 'RCO 87 - Organisations cooperating across borders.',
                            'fr' => 'RCO 87 - Organisations coopérant au-delà des frontières.',
                        ],
                        'progress' => 0,
                        'target' => 13
                    ],
                ],
            ],
            [
                'title' => [
                    'es' => 'Indicadores de resultado',
                    'pt' => 'Indicadores de resultado',
                    'en' => 'Result indicators',
                    'fr' => 'Indicateurs de résultat',
                ],
                'goals' => [
                    [
                        'title' => [
                            'es' => 'RCR 84 - Organizaciones que cooperan después de haber completado el proyecto.',
                            'pt' => 'RCR 84 - Organizações que continuam a cooperar após a conclusão do projeto.',
                            'en' => 'RCR 84 - Organisations cooperating after project completion.',
                            'fr' => 'RCR 84 - Organisations qui continuent de coopérer après la fin du projet.',
                        ],
                        'progress' => 0,
                        'target' => 13
                    ],
                    [
                        'title' => [
                            'es' => 'RCR 79 - Estrategias conjuntas y planes de acción adoptados por organizaciones.',
                            'pt' => 'RCR 79 - Estratégias conjuntas e planos de ação adotados pelas organizações.',
                            'en' => 'RCR 79 - Joint strategies and action plans adopted by organisations.',
                            'fr' => 'RCR 79 - Stratégies conjointes et plans d’action adoptés par les organisations.',
                        ],
                        'progress' => 0,
                        'target' => 1
                    ],
                ],
            ],
            [
                'title' => [
                    'es' => 'Indicadores específicos del proyecto',
                    'pt' => 'Indicadores específicos do projeto',
                    'en' => 'Project-specific indicators',
                    'fr' => 'Indicateurs spécifiques au projet',
                ],
                'goals' => [
                    [
                        'title' => [
                            'es' => 'Nº de personas formadas a través de cursos online y participantes en seminarios y jornadas asociadas a actividades de ejecución (los alumnos participantes de las acciones formativas tendrán que inscribirse previamente en formularios habilitados a tal efecto. Se entrega copia de los formularios en los informes de seguimiento).',
                            'pt' => 'N.º de pessoas formadas através de cursos online e participantes em seminários e jornadas associadas às atividades de execução (os alunos das ações formativas devem inscrever-se previamente em formulários próprios; cópias serão anexadas aos relatórios de acompanhamento).',
                            'en' => 'Number of people trained via online courses and participants in seminars and events linked to implementation activities (participants must pre-register via dedicated forms; copies will be included in progress reports).',
                            'fr' => 'Nombre de personnes formées via des cours en ligne et de participants aux séminaires et journées liés aux activités de mise en œuvre (inscription préalable via des formulaires dédiés ; copies jointes aux rapports de suivi).',
                        ],
                        'progress' => 0,
                        'target' => 350
                    ],
                    [
                        'title' => [
                            'es' => 'Nº de reuniones de seguimiento del proyecto.',
                            'pt' => 'N.º de reuniões de acompanhamento do projeto.',
                            'en' => 'Number of project follow-up meetings.',
                            'fr' => 'Nombre de réunions de suivi du projet.',
                        ],
                        'progress' => 0,
                        'target' => 5
                    ],
                    [
                        'title' => [
                            'es' => 'Nº de indicadores de vulnerabilidad ante cambio climático desarrollados.',
                            'pt' => 'N.º de indicadores de vulnerabilidade às alterações climáticas desenvolvidos.',
                            'en' => 'Number of climate change vulnerability indicators developed.',
                            'fr' => 'Nombre d’indicateurs de vulnérabilité au changement climatique développés.',
                        ],
                        'progress' => 0,
                        'target' => 4
                    ],
                    [
                        'title' => [
                            'es' => 'Nº de convenios de colaboración entre los agentes implicados en el Observatorio del Cambio Climático.',
                            'pt' => 'N.º de acordos de colaboração entre os agentes envolvidos no Observatório das Alterações Climáticas.',
                            'en' => 'Number of cooperation agreements between stakeholders involved in the Climate Change Observatory.',
                            'fr' => 'Nombre d’accords de collaboration entre les acteurs impliqués dans l’Observatoire du Changement Climatique.',
                        ],
                        'progress' => 0,
                        'target' => 1
                    ],
                    [
                        'title' => [
                            'es' => 'Nº de publicaciones científicas.',
                            'pt' => 'N.º de publicações científicas.',
                            'en' => 'Number of scientific publications.',
                            'fr' => 'Nombre de publications scientifiques.',
                        ],
                        'progress' => 0,
                        'target' => 3
                    ],
                    [
                        'title' => [
                            'es' => 'Nº de investigadores formados.',
                            'pt' => 'N.º de investigadores formados.',
                            'en' => 'Number of researchers trained.',
                            'fr' => 'Nombre de chercheurs formés.',
                        ],
                        'progress' => 0,
                        'target' => 5
                    ],
                    [
                        'title' => [
                            'es' => 'Nº de alumnos de primaria y secundaria sensibilizados.',
                            'pt' => 'N.º de alunos do ensino básico e secundário sensibilizados.',
                            'en' => 'Number of primary and secondary students made aware.',
                            'fr' => 'Nombre d’élèves du primaire et du secondaire sensibilisés.',
                        ],
                        'progress' => 0,
                        'target' => 900
                    ],
                    [
                        'title' => [
                            'es' => 'Nº de estudios realizados',
                            'pt' => 'N.º de estudos realizados',
                            'en' => 'Number of studies carried out',
                            'fr' => 'Nombre d’études réalisées',
                        ],
                        'progress' => 0,
                        'target' => 4
                    ],
                    [
                        'title' => [
                            'es' => 'Nº de nuevos contratos de investigadores.',
                            'pt' => 'N.º de novos contratos de investigadores.',
                            'en' => 'Number of new researcher contracts.',
                            'fr' => 'Nombre de nouveaux contrats de chercheurs.',
                        ],
                        'progress' => 0,
                        'target' => 6
                    ],
                ],
            ],
            [
                'title' => [
                    'es' => 'Indicadores de comunicación',
                    'pt' => 'Indicadores de comunicação',
                    'en' => 'Communication indicators',
                    'fr' => 'Indicateurs de communication',
                ],
                'goals' => [
                    [
                        'title' => [
                            'es' => 'Nº visitas a página web del proyecto.',
                            'pt' => 'N.º de visitas ao site do projeto.',
                            'en' => 'Number of visits to the project website.',
                            'fr' => 'Nombre de visites sur le site web du projet.',
                        ],
                        'progress' => 0,
                        'target' => 5000
                    ],
                    [
                        'title' => [
                            'es' => 'Nº de actos de difusión en los medios de comunicación.',
                            'pt' => 'N.º de ações de divulgação nos meios de comunicação.',
                            'en' => 'Number of dissemination actions in the media.',
                            'fr' => 'Nombre d’actions de diffusion dans les médias.',
                        ],
                        'progress' => 0,
                        'target' => 15
                    ],
                    [
                        'title' => [
                            'es' => 'Nº total de publicaciones realizadas.',
                            'pt' => 'N.º total de publicações realizadas.',
                            'en' => 'Total number of publications produced.',
                            'fr' => 'Nombre total de publications réalisées.',
                        ],
                        'progress' => 0,
                        'target' => 43
                    ],
                    [
                        'title' => [
                            'es' => 'Nº de publicaciones realizadas en redes sociales.',
                            'pt' => 'N.º de publicações realizadas nas redes sociais.',
                            'en' => 'Number of publications on social media.',
                            'fr' => 'Nombre de publications réalisées sur les réseaux sociaux.',
                        ],
                        'progress' => 0,
                        'target' => 40
                    ],
                    [
                        'title' => [
                            'es' => 'Nº publicaciones realizadas en formato físico.',
                            'pt' => 'N.º de publicações realizadas em formato físico.',
                            'en' => 'Number of publications produced in print format.',
                            'fr' => 'Nombre de publications réalisées au format papier.',
                        ],
                        'progress' => 0,
                        'target' => 3
                    ],
                    [
                        'title' => [
                            'es' => 'Nº de producciones audiovisuales.',
                            'pt' => 'N.º de produções audiovisuais.',
                            'en' => 'Number of audiovisual productions.',
                            'fr' => 'Nombre de productions audiovisuelles.',
                        ],
                        'progress' => 0,
                        'target' => 1
                    ],
                    [
                        'title' => [
                            'es' => 'Nº eventos de comunicación realizados.',
                            'pt' => 'N.º de eventos de comunicação realizados.',
                            'en' => 'Number of communication events held.',
                            'fr' => 'Nombre d’événements de communication réalisés.',
                        ],
                        'progress' => 0,
                        'target' => 10
                    ],
                    [
                        'title' => [
                            'es' => 'Nº total de participantes en los eventos realizados.',
                            'pt' => 'N.º total de participantes nos eventos realizados.',
                            'en' => 'Total number of participants in the events held.',
                            'fr' => 'Nombre total de participants aux événements organisés.',
                        ],
                        'progress' => 0,
                        'target' => 450
                    ],
                    [
                        'title' => [
                            'es' => 'Nº total de mujeres en los eventos realizados.',
                            'pt' => 'N.º total de mulheres nos eventos realizados.',
                            'en' => 'Total number of women in the events held.',
                            'fr' => 'Nombre total de femmes ayant participé aux événements.',
                        ],
                        'progress' => 0,
                        'target' => 250
                    ],
                    [
                        'title' => [
                            'es' => 'Nº total de participantes de los terceros países en los eventos realizados.',
                            'pt' => 'N.º total de participantes de países terceiros nos eventos realizados.',
                            'en' => 'Total number of participants from third countries in the events held.',
                            'fr' => 'Nombre total de participants des pays tiers aux événements organisés.',
                        ],
                        'progress' => 0,
                        'target' => 50
                    ],
                ],
            ],
        ];
        
    
        return view('Front.stadistics.index', ['indicators' => $indicators]);
    });
    Route::get('/results', function(){
        return view('Front.results.index');
    });
    Route::get('/contact', function(){
        return view('Front.contact.index');
    });
});

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware(AuthSession::class)->group(function() {
    Route::get('/admin', function(){
        return view('Back.home.index');
    });
    Route::get('/admin/crear-noticia', function(){
        return view('Back.news.create');
    });
});