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
                    'en' => 'Specific objective 1 of the project',
                    'fr' => 'Objectif spécifique 1 du projet',
                ],
                'description' => [
                    'es' => 'Evaluar el alcance, intensidad y riesgo asociados a las inundaciones costeras: resultados cuantitativos y cualitativos sobre el impacto social, económico y ecosistémico.',
                    'pt' => 'Avaliar o alcance, a intensidade e o risco associados às inundações costeiras: resultados quantitativos e qualitativos sobre o impacto social, económico e ecossistémico.',
                    'en' => 'Assess the extent, intensity and risk associated with coastal flooding: quantitative and qualitative results on social, economic and ecosystem impacts.',
                    'fr' => 'Évaluer l’étendue, l’intensité et le risque associés aux inondations côtières : résultats quantitatifs et qualitatifs sur les impacts sociaux, économiques et écosystémiques.',
                ],
                'activities' => [
                    [
                        'id' => '1.1',
                        'description' => [
                            'es' => 'Estudio de la evolución de la línea de costa en la región de cooperación a partir de técnicas remotas e inteligencia artificial.',
                            'pt' => 'Estudo da evolução da linha de costa na região de cooperação com base em técnicas remotas e inteligência artificial.',
                            'en' => 'Study of shoreline evolution in the cooperation region using remote techniques and artificial intelligence.',
                            'fr' => 'Étude de l’évolution du trait de côte dans la région de coopération à l’aide de techniques à distance et d’intelligence artificielle.',
                        ],
                    ],
                    [
                        'id' => '1.2',
                        'description' => [
                            'es' => 'Estudio de las afecciones de la intrusión salina en las costas y sus efectos sobre sectores afectados.',
                            'pt' => 'Estudo dos efeitos da intrusão salina nas zonas costeiras e dos seus impactos nos setores afetados.',
                            'en' => 'Study of the effects of saltwater intrusion on coasts and its impacts on affected sectors.',
                            'fr' => 'Étude des effets de l’intrusion saline sur les zones côtières et de ses impacts sur les secteurs concernés.',
                        ],
                    ],
                    [
                        'id' => '1.3',
                        'description' => [
                            'es' => 'Diseño de un sistema piloto de predicción de las condiciones marinas costeras, focalizado en la prevención de impactos de eventos adversos costeros.',
                            'pt' => 'Desenho de um sistema-piloto de previsão das condições marinhas costeiras, focado na prevenção dos impactos de eventos costeiros adversos.',
                            'en' => 'Design of a pilot system to forecast coastal marine conditions, focused on preventing the impacts of adverse coastal events.',
                            'fr' => 'Conception d’un système pilote de prévision des conditions marines côtières, axé sur la prévention des impacts des événements côtiers défavorables.',
                        ],
                    ],
                ],
            ],
            [
                'title' => [
                    'es' => 'Objetivo específico 2 del proyecto',
                    'pt' => 'Objetivo específico 2 do projeto',
                    'en' => 'Specific objective 2 of the project',
                    'fr' => 'Objectif spécifique 2 du projet',
                ],
                'description' => [
                    'es' => 'Evaluar el alcance, intensidad y riesgo asociados a la erosión costera: resultados cuantitativos y cualitativos sobre el impacto social, económico y ecosistémico.',
                    'pt' => 'Avaliar o alcance, a intensidade e o risco associados à erosão costeira: resultados quantitativos e qualitativos sobre o impacto social, económico e ecossistémico.',
                    'en' => 'Assess the extent, intensity and risk associated with coastal erosion: quantitative and qualitative results on social, economic and ecosystem impacts.',
                    'fr' => 'Évaluer l’étendue, l’intensité et le risque associés à l’érosion côtière : résultats quantitatifs et qualitatifs sur les impacts sociaux, économiques et écosystémiques.',
                ],
                'activities' => [
                    [
                        'id' => '2.1',
                        'description' => [
                            'es' => 'Evaluación de la erosión de escarpes y acantilados en las costas rocosas seleccionadas de la Región MAC.',
                            'pt' => 'Avaliação da erosão de escarpas e falésias nas costas rochosas selecionadas da Região MAC.',
                            'en' => 'Assessment of the erosion of scarps and cliffs on selected rocky coasts of the MAC Region.',
                            'fr' => 'Évaluation de l’érosion des escarpements et falaises sur des côtes rocheuses sélectionnées de la région MAC.',
                        ],
                    ],
                    [
                        'id' => '2.2',
                        'description' => [
                            'es' => 'Evaluación de la erosión de costas sedimentarias, sistemas dunares y humedales costeros, así como sus atributos ecológicos y paisajísticos.',
                            'pt' => 'Avaliação da erosão das costas sedimentares, sistemas dunares e zonas húmidas costeiras, bem como dos seus atributos ecológicos e paisagísticos.',
                            'en' => 'Assessment of erosion on sedimentary coasts, dune systems and coastal wetlands, as well as their ecological and landscape attributes.',
                            'fr' => 'Évaluation de l’érosion des côtes sédimentaires, des systèmes dunaires et des zones humides côtières, ainsi que de leurs attributs écologiques et paysagers.',
                        ],
                    ],
                    [
                        'id' => '2.3',
                        'description' => [
                            'es' => 'Estudios de planificación de la orla costera en diferentes regiones del espacio MAC de cooperación.',
                            'pt' => 'Estudos de planeamento da orla costeira em diferentes regiões do espaço de cooperação MAC.',
                            'en' => 'Coastal zone planning studies in different regions of the MAC cooperation area.',
                            'fr' => 'Études d’aménagement du littoral dans différentes régions de l’espace de coopération MAC.',
                        ],
                    ],
                ],
            ],
            [
                'title' => [
                    'es' => 'Objetivo específico 3 del proyecto',
                    'pt' => 'Objetivo específico 3 do projeto',
                    'en' => 'Specific objective 3 of the project',
                    'fr' => 'Objectif spécifique 3 du projet',
                ],
                'description' => [
                    'es' => 'Evaluar el alcance, intensidad y riesgo asociados a la subida de la temperatura media del mar y otros parámetros físico-químicos: resultados cuantitativos y cualitativos sobre el impacto social, económico y ecosistémico.',
                    'pt' => 'Avaliar o alcance, a intensidade e o risco associados ao aumento da temperatura média do mar e de outros parâmetros físico-químicos: resultados quantitativos e qualitativos sobre o impacto social, económico e ecossistémico.',
                    'en' => 'Assess the extent, intensity and risk associated with the rise in average sea temperature and other physico-chemical parameters: quantitative and qualitative results on social, economic and ecosystem impacts.',
                    'fr' => 'Évaluer l’étendue, l’intensité et le risque associés à la hausse de la température moyenne de la mer et d’autres paramètres physico-chimiques : résultats quantitatifs et qualitatifs sur les impacts sociaux, économiques et écosystémiques.',
                ],
                'activities' => [
                    [
                        'id' => '3.1',
                        'description' => [
                            'es' => 'Cuantificar los parámetros físicoquímicos de interés para desarrollar indicadores y establecer la base de la gobernanza de espacios costeros.',
                            'pt' => 'Quantificar os parâmetros físico-químicos de interesse para desenvolver indicadores e estabelecer as bases da governação dos espaços costeiros.',
                            'en' => 'Quantify physico-chemical parameters of interest to develop indicators and establish the basis for the governance of coastal areas.',
                            'fr' => 'Quantifier les paramètres physico-chimiques d’intérêt afin de développer des indicateurs et d’établir les bases de la gouvernance des espaces côtiers.',
                        ],
                    ],
                    [
                        'id' => '3.2',
                        'description' => [
                            'es' => 'Ciencia ciudadana y sensibilización: el valor de las zonas costeras y litorales en los sectores socio-económicos de la región de cooperación.',
                            'pt' => 'Ciência cidadã e sensibilização: o valor das zonas costeiras e litorais nos setores socioeconómicos da região de cooperação.',
                            'en' => 'Citizen science and awareness: the value of coastal and littoral areas for the socio-economic sectors of the cooperation region.',
                            'fr' => 'Science citoyenne et sensibilisation : la valeur des zones côtières et littorales pour les secteurs socio-économiques de la région de coopération.',
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