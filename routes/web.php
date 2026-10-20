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
                    'es' => 'Consolidar el Observatorio de Cambio Climático',
                    'pt' => 'Consolidar o Observatório das Alterações Climáticas',
                    'en' => 'Consolidate the Climate Change Observatory',
                    'fr' => 'Consolider l’Observatoire du Changement Climatique',
                ],
                'navigation_title' => [
                    'es' => 'Observatorio y adaptación climática',
                    'pt' => 'Observatório e adaptação climática',
                    'en' => 'Observatory and climate adaptation',
                    'fr' => 'Observatoire et adaptation climatique',
                ],
                'image' => 'images/objective-cooperation.svg',
                'description' => [
                    'es' => 'El proyecto consolidará el Observatorio de Cambio Climático (OCC) de la Macaronesia. El OCC analizará y promoverá medidas de adaptación, y establecerá un marco de cooperación para gestionar riesgos naturales asociados al cambio climático en la región y terceros países.',
                    'pt' => 'O projeto consolidará o Observatório das Alterações Climáticas (OCC) da Macaronésia. O OCC analisará e promoverá medidas de adaptação e estabelecerá um quadro de cooperação para gerir riscos naturais associados às alterações climáticas na região e em países terceiros.',
                    'en' => 'The project will consolidate the Macaronesia Climate Change Observatory (OCC). The OCC will assess and promote adaptation measures and establish a cooperation framework to manage natural risks linked to climate change in the region and third countries.',
                    'fr' => 'Le projet consolidera l’Observatoire du Changement Climatique (OCC) de la Macaronésie. L’OCC analysera et promouvra des mesures d’adaptation, et établira un cadre de coopération pour gérer les risques naturels liés au changement climatique dans la région et les pays tiers.',
                ],
                'activities' => [
                    [
                        'id' => '1.1',
                        'description' => [
                            'es' => 'Desarrollar desde el OCC una Estrategia Macaronésica de Adaptación al Cambio Climático basada en buenas prácticas e integrar a terceros países.',
                            'pt' => 'Desenvolver, a partir do OCC, uma Estratégia Macaronésica de Adaptação às Alterações Climáticas baseada em boas práticas e integrar países terceiros.',
                            'en' => 'Develop an OCC-led Macaronesian Climate Change Adaptation Strategy based on good practices and integrate third countries.',
                            'fr' => 'Élaborer, sous l’égide de l’OCC, une stratégie macaronésienne d’adaptation au changement climatique fondée sur de bonnes pratiques et intégrer les pays tiers.',
                        ],
                    ],
                    [
                        'id' => '1.2',
                        'description' => [
                            'es' => 'Implementar un Atlas Climático para Macaronesia y transferir sus conocimientos a la sociedad y las instituciones públicas.',
                            'pt' => 'Implementar um Atlas Climático para a Macaronésia e transferir o seu conhecimento para a sociedade e as instituições públicas.',
                            'en' => 'Implement a Climate Atlas for Macaronesia and share its knowledge with the public and public institutions.',
                            'fr' => 'Mettre en place un Atlas climatique pour la Macaronésie et transmettre ses connaissances au public et aux institutions publiques.',
                        ],
                    ],
                    [
                        'id' => '1.3',
                        'description' => [
                            'es' => 'Proponer indicadores ambientales y socioeconómicos comunes sobre cambio climático para toda Macaronesia.',
                            'pt' => 'Propor indicadores ambientais e socioeconómicos comuns sobre alterações climáticas para toda a Macaronésia.',
                            'en' => 'Propose shared environmental and socio-economic climate change indicators for Macaronesia.',
                            'fr' => 'Proposer des indicateurs environnementaux et socio-économiques communs sur le changement climatique pour toute la Macaronésie.',
                        ],
                    ],
                ],
            ],
            [
                'title' => [
                    'es' => 'Evaluar los indicadores climáticos regionales',
                    'pt' => 'Avaliar os indicadores climáticos regionais',
                    'en' => 'Assess regional climate indicators',
                    'fr' => 'Évaluer les indicateurs climatiques régionaux',
                ],
                'navigation_title' => [
                    'es' => 'Indicadores y conocimiento climático',
                    'pt' => 'Indicadores e conhecimento climático',
                    'en' => 'Climate indicators and knowledge',
                    'fr' => 'Indicateurs et connaissances climatiques',
                ],
                'image' => 'images/objective-climate-science.svg',
                'description' => [
                    'es' => 'El proyecto evaluará los indicadores regionales del cambio climático, desde la atmósfera hasta el océano. También estudiará los impactos y las medidas de adaptación relacionados con la vulnerabilidad de los ecosistemas y la sociedad.',
                    'pt' => 'O projeto avaliará os indicadores regionais das alterações climáticas, da atmosfera ao oceano. Também estudará os impactos e as medidas de adaptação relacionados com a vulnerabilidade dos ecossistemas e da sociedade.',
                    'en' => 'The project will assess regional climate change indicators, from the atmosphere to the ocean. It will also study impacts and adaptation measures linked to the vulnerability of ecosystems and society.',
                    'fr' => 'Le projet évaluera les indicateurs régionaux du changement climatique, de l’atmosphère à l’océan. Il étudiera aussi les impacts et les mesures d’adaptation liés à la vulnérabilité des écosystèmes et de la société.',
                ],
                'activities' => [
                    [
                        'id' => '2.1',
                        'description' => [
                            'es' => 'Elaborar regionalizaciones climáticas dinámicas con distintos escenarios e indicadores consolidados en toda el área de actuación.',
                            'pt' => 'Elaborar regionalizações climáticas dinâmicas com diferentes cenários e indicadores consolidados em toda a área de atuação.',
                            'en' => 'Develop dynamic climate regionalisations using different scenarios and the consolidated indicators across the project area.',
                            'fr' => 'Élaborer des régionalisations climatiques dynamiques à partir de différents scénarios et des indicateurs consolidés dans toute la zone d’intervention.',
                        ],
                    ],
                    [
                        'id' => '2.2',
                        'description' => [
                            'es' => 'Analizar la evolución del sistema oceánico de CO₂ y de los indicadores climáticos mediante series temporales, bases de datos y datos satelitales.',
                            'pt' => 'Analisar a evolução do sistema oceânico de CO₂ e dos indicadores climáticos através de séries temporais, bases de dados e dados de satélite.',
                            'en' => 'Analyse the oceanic CO₂ system and climate indicators over time using time series, databases and satellite data.',
                            'fr' => 'Analyser l’évolution du système océanique de CO₂ et des indicateurs climatiques à partir de séries temporelles, de bases de données et de données satellitaires.',
                        ],
                    ],
                    [
                        'id' => '2.3',
                        'description' => [
                            'es' => 'Evaluar la erosividad de la lluvia y los efectos del cambio climático en la escorrentía y la pérdida de suelo por erosión.',
                            'pt' => 'Avaliar a erosividade da chuva e os efeitos das alterações climáticas no escoamento e na perda de solo por erosão.',
                            'en' => 'Assess rainfall erosivity and the effects of climate change on runoff and soil loss through erosion.',
                            'fr' => 'Évaluer l’érosivité des pluies et les effets du changement climatique sur le ruissellement et la perte de sol par érosion.',
                        ],
                    ],
                ],
            ],
            [
                'title' => [
                    'es' => 'Ciencia ciudadana y adaptación climática',
                    'pt' => 'Ciência cidadã e adaptação climática',
                    'en' => 'Citizen science and climate adaptation',
                    'fr' => 'Science citoyenne et adaptation climatique',
                ],
                'navigation_title' => [
                    'es' => 'Ciencia ciudadana y transición verde',
                    'pt' => 'Ciência cidadã e transição verde',
                    'en' => 'Citizen science and green transition',
                    'fr' => 'Science citoyenne et transition verte',
                ],
                'image' => 'images/objective-citizen-science.svg',
                'description' => [
                    'es' => 'El proyecto pondrá en marcha acciones para mejorar la comprensión científica del cambio climático y reforzar la coordinación entre administraciones y entidades sociales y económicas ante sus riesgos.',
                    'pt' => 'O projeto implementará ações para melhorar a compreensão científica das alterações climáticas e reforçar a coordenação entre administrações e entidades sociais e económicas perante os seus riscos.',
                    'en' => 'The project will carry out actions to improve scientific understanding of climate change and strengthen coordination between public administrations and social and economic organisations in response to related risks.',
                    'fr' => 'Le projet mettra en œuvre des actions pour améliorer la compréhension scientifique du changement climatique et renforcer la coordination entre les administrations et les organismes sociaux et économiques face aux risques associés.',
                ],
                'activities' => [
                    [
                        'id' => '3.1',
                        'description' => [
                            'es' => 'Promover la ciencia ciudadana sobre acción climática y ofrecer formación técnica sobre los impactos del cambio climático y la adaptación.',
                            'pt' => 'Promover a ciência cidadã sobre ação climática e oferecer formação técnica sobre os impactos das alterações climáticas e a adaptação.',
                            'en' => 'Promote citizen science on climate action and provide technical training on climate change impacts and adaptation.',
                            'fr' => 'Promouvoir la science citoyenne sur l’action climatique et proposer une formation technique sur les impacts du changement climatique et l’adaptation.',
                        ],
                    ],
                    [
                        'id' => '3.2',
                        'description' => [
                            'es' => 'Ampliar las oportunidades de actividad y empleo en la transición verde y reducir los impactos socioeconómicos.',
                            'pt' => 'Ampliar as oportunidades de atividade e emprego na transição verde e reduzir os impactos socioeconómicos.',
                            'en' => 'Expand work and employment opportunities in the green transition and reduce socio-economic impacts.',
                            'fr' => 'Accroître les possibilités d’activité et d’emploi dans la transition verte et réduire les impacts socio-économiques.',
                        ],
                    ],
                    [
                        'id' => '3.3',
                        'description' => [
                            'es' => 'Crear herramientas de aprendizaje para evaluar riesgos y oportunidades y mejorar las decisiones de inversión ante los riesgos climáticos.',
                            'pt' => 'Criar ferramentas de aprendizagem para avaliar riscos e oportunidades e melhorar as decisões de investimento perante os riscos climáticos.',
                            'en' => 'Create learning tools to assess risks and opportunities and improve investment decisions in response to climate risks.',
                            'fr' => 'Créer des outils d’apprentissage pour évaluer les risques et les opportunités et améliorer les décisions d’investissement face aux risques climatiques.',
                        ],
                    ],
                ],
            ],
        ];             
    
        $results = [
            [
                'id' => 'studies',
                'category' => 'research',
                'icon' => 'book-open',
                'title' => [
                    'es' => 'Estudios realizados', // 2 estudios de la ULPGC
                    'pt' => 'Estudos realizados',
                    'en' => 'Studies carried out',
                    'fr' => 'Études réalisées',
                ],
                'progress' => 2,
                'target' => 15
            ],
            [
                'id' => 'researchers',
                'category' => 'research',
                'icon' => 'users',
                'title' => [
                    'es' => 'Investigadores', 
                    'pt' => 'Investigadores',
                    'en' => 'Researchers',
                    'fr' => 'Chercheurs',
                ],
                'progress' => 1, // Maria Jimenez (ULL)
                'target' => 5
            ],
            [
                'id' => 'follow-up-meetings',
                'category' => 'cooperation',
                'icon' => 'calendar-check',
                'title' => [
                    'es' => 'Reuniones de seguimiento',
                    'pt' => 'Reuniões de acompanhamento',
                    'en' => 'Follow-up meetings',
                    'fr' => 'Réunions de suivi',
                ],
                'progress' => 2,
                'target' => 5
            ],
            [
                'id' => 'event-participants',
                'category' => 'communication',
                'icon' => 'users-round',
                'title' => [
                    'es' => 'Participantes en eventos',
                    'pt' => 'Participantes em eventos',
                    'en' => 'Event participants',
                    'fr' => 'Participants aux événements',
                ],
                'progress' => 143, // Refugios climatios 75 + Ghana 36 + Jornadas 32
                'target' => 400
            ],
            [
                'id' => 'scientific-publications',
                'category' => 'research',
                'icon' => 'file-text',
                'title' => [
                    'es' => 'Publicaciones científicas',
                    'pt' => 'Publicações científicas',
                    'en' => 'Scientific publications',
                    'fr' => 'Publications scientifiques',
                ],
                'progress' => 10,
                'target' => 3
            ],
            [
                'id' => 'website-visits',
                'category' => 'communication',
                'icon' => 'globe',
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
                'id' => 'dissemination-events',
                'category' => 'communication',
                'icon' => 'megaphone',
                'title' => [
                    'es' => 'Actos de difusión',
                    'pt' => 'Ações de divulgação',
                    'en' => 'Dissemination events',
                    'fr' => 'Actions de diffusion',
                ],
                'progress' => 2, // Refugios climatios 1 + Ghana
                'target' => 15
            ],
            [
                'id' => 'vulnerability-indicators',
                'category' => 'research',
                'icon' => 'chart',
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
                        'reported_value' => 2,
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

        $categoryIds = ['output', 'result', 'project-specific', 'communication'];
        $shortTitles = [
            'rco-83' => ['es' => 'Estrategias conjuntas', 'pt' => 'Estratégias conjuntas', 'en' => 'Joint strategies', 'fr' => 'Stratégies conjointes'],
            'rco-84' => ['es' => 'Actividades piloto', 'pt' => 'Atividades-piloto', 'en' => 'Pilot activities', 'fr' => 'Activités pilotes'],
            'rco-87' => ['es' => 'Organizaciones que cooperan', 'pt' => 'Organizações em cooperação', 'en' => 'Cooperating organisations', 'fr' => 'Organisations coopérantes'],
            'rcr-84' => ['es' => 'Cooperación tras el proyecto', 'pt' => 'Cooperação após o projeto', 'en' => 'Cooperation after the project', 'fr' => 'Coopération après le projet'],
            'rcr-79' => ['es' => 'Estrategias adoptadas', 'pt' => 'Estratégias adotadas', 'en' => 'Adopted strategies', 'fr' => 'Stratégies adoptées'],
            'project-specific-1' => ['es' => 'Personas formadas y participantes', 'pt' => 'Pessoas formadas e participantes', 'en' => 'People trained and event participants', 'fr' => 'Personnes formées et participantes'],
            'project-specific-2' => ['es' => 'Reuniones de seguimiento', 'pt' => 'Reuniões de acompanhamento', 'en' => 'Project follow-up meetings', 'fr' => 'Réunions de suivi'],
            'project-specific-3' => ['es' => 'Indicadores de vulnerabilidad climática', 'pt' => 'Indicadores de vulnerabilidade climática', 'en' => 'Climate vulnerability indicators', 'fr' => 'Indicateurs de vulnérabilité climatique'],
            'project-specific-4' => ['es' => 'Convenios del Observatorio', 'pt' => 'Acordos do Observatório', 'en' => 'Observatory agreements', 'fr' => 'Accords de l’Observatoire'],
            'project-specific-5' => ['es' => 'Publicaciones científicas', 'pt' => 'Publicações científicas', 'en' => 'Scientific publications', 'fr' => 'Publications scientifiques'],
            'project-specific-6' => ['es' => 'Investigadores formados', 'pt' => 'Investigadores formados', 'en' => 'Researchers trained', 'fr' => 'Chercheurs formés'],
            'project-specific-7' => ['es' => 'Alumnado sensibilizado', 'pt' => 'Alunos sensibilizados', 'en' => 'Students reached', 'fr' => 'Élèves sensibilisés'], // Llevar hojas de firmas para la charla de Jesús
            'project-specific-8' => ['es' => 'Estudios realizados', 'pt' => 'Estudos realizados', 'en' => 'Studies completed', 'fr' => 'Études réalisées'],
            'project-specific-9' => ['es' => 'Contratos de investigación', 'pt' => 'Contratos de investigação', 'en' => 'Research contracts', 'fr' => 'Contrats de recherche'],
            'communication-1' => ['es' => 'Visitas a la web', 'pt' => 'Visitas ao site', 'en' => 'Website visits', 'fr' => 'Visites du site'],
            'communication-2' => ['es' => 'Acciones en medios', 'pt' => 'Ações nos meios de comunicação', 'en' => 'Media outreach actions', 'fr' => 'Actions dans les médias'],
            'communication-3' => ['es' => 'Publicaciones', 'pt' => 'Publicações', 'en' => 'Publications', 'fr' => 'Publications'],
            'communication-4' => ['es' => 'Publicaciones en redes sociales', 'pt' => 'Publicações nas redes sociais', 'en' => 'Social media posts', 'fr' => 'Publications sur les réseaux sociaux'],
            'communication-5' => ['es' => 'Publicaciones impresas', 'pt' => 'Publicações impressas', 'en' => 'Print publications', 'fr' => 'Publications imprimées'],
            'communication-6' => ['es' => 'Producciones audiovisuales', 'pt' => 'Produções audiovisuais', 'en' => 'Audiovisual productions', 'fr' => 'Productions audiovisuelles'],
            'communication-7' => ['es' => 'Eventos de comunicación', 'pt' => 'Eventos de comunicação', 'en' => 'Communication events', 'fr' => 'Événements de communication'],
            'communication-8' => ['es' => 'Participantes en eventos', 'pt' => 'Participantes nos eventos', 'en' => 'Event participants', 'fr' => 'Participants aux événements'],
            'communication-9' => ['es' => 'Mujeres participantes', 'pt' => 'Mulheres participantes', 'en' => 'Women participants', 'fr' => 'Femmes participantes'],
            'communication-10' => ['es' => 'Participantes de terceros países', 'pt' => 'Participantes de países terceiros', 'en' => 'Participants from third countries', 'fr' => 'Participants des pays tiers'],
        ];
        foreach ($indicators as $categoryIndex => &$category) {
            $category['id'] = $categoryIds[$categoryIndex] ?? 'category-' . ($categoryIndex + 1);

            foreach ($category['goals'] as $goalIndex => &$goal) {
                $originalTitle = $goal['title']['es'] ?? '';
                preg_match('/^(RCO|RCR)\s+(\d+)/u', $originalTitle, $matches);
                $goal['code'] = isset($matches[0]) ? $matches[0] : null;
                $goal['id'] = $goal['code']
                    ? strtolower(str_replace(' ', '-', $goal['code']))
                    : $category['id'] . '-' . ($goalIndex + 1);
                $goal['short_title'] = $shortTitles[$goal['id']] ?? $goal['title'];
                $goal['category_id'] = $category['id'];
                $goal['category_title'] = $category['title'];
                $goal['value'] = isset($goal['reported_value']) ? (int) $goal['reported_value'] : null;
                $goal['target'] = (int) ($goal['target'] ?? 0);

                if ($goal['id'] === 'communication-1') {
                    $goal['value'] = Visitor::count();
                }
            }
            unset($goal);
        }
        unset($category);
        
    
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
