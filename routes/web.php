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
        
        $objectives = array(
            [
                'title' => 'Objetivo específico 1 del proyecto',
                'description' => 'Consolidar el Observatorio de Cambio Climático (OCC) de la Macaronesia: desde la Región MAC a Europa. Este ente permitirá analizar y promover las medidas de adaptación al cambio climático y establecer un marco de cooperación en la gestión de riesgos naturales provocados por el cambio climático en la región macaronésica y terceros países.',
                'activities' => array([
                    'id'=> '1.1',
                    'description' =>'Desarrollo de una estrategia Macaronésica de Adaptación al cambio climatico desde el OCC a través de buenas prácticas: integracion de Terceros Países.'
                ],
                [
                    'id'=> '1.2',
                    'description' =>'Implementación de un Atlas Climatico para la Macaronesia que permita la transferencia desde el conocimiento a la sociedad y las instituciones públicas.'
                ],
                [
                    'id'=> '1.3',
                    'description' =>'Desarrollo de una propuesta común de indicaciones sobre Cambio Climático (de tipo ambiental y socioeconómico) para toda la Región Macaronésica.'
                ])
            ],[
                'title' => 'Objetivo especifico 2 del proyecto',
                'description' => 'Evaluar la evolución de los indicadores regionales de cambio climático en la región macaronésica (desde la atmósfera hasta el océano). Impactos y acciones de adaptación vinculadas a la vulnerabilidad de los ecosistemas y la sociedad.',
                'activities' => array([
                    'id'=> '2.1',
                    'description' =>'Desarrollo de regionalizaciones climáticas dinámicas usando los diferentes escenarios y los indicadores consolidados en todo el área de actuación.'
                ],
                [
                    'id'=> '2.2',
                    'description' =>'Análisis de la evolución del sistema del CO2 en el océano e indicadores de CC a través de series temporales, bases de datos y datos satelitales'
                ],
                [
                    'id'=> '2.3',
                    'description' =>'Evaluación de impactos: caracterización de la erosividad de la lluvia; incidencia del CC en la escorrentía y pérdida de suelo por erosión.'
                ])
            ],[
                'title' => 'Objetivo especifico 3 del proyecto',
                'description' => 'Implementar acciones para la mejora del entendimiento científico y la coordinación entre las administraciones y las entidades sociales y económicas ante los riesgos asociados al cambio climático.',
                'activities' => array([
                    'id'=> '3.1',
                    'description' =>'Programa de fomento de la ciencia ciudadana sobre acción climática y capacitación técnica sobre impactos y adaptación al cambio climático.'
                ],
                [
                    'id'=> '3.2',
                    'description' =>'Optimización de oportunidades de actividad y empleo en la transición hacia una economía verde y minimización de los impactos socioeconómicos.'
                ],
                [
                    'id'=> '3.3',
                    'description' =>'Desarrollo de herramientas de aprendizaje para evaluar riesgos y oportunidades y mejorar las decisiones de inversión ante los riesgos climáticos.'
                ])
            ]
        );
    
        $results = array(
            [
                'title' => 'Estudios realizados',
                'progress' => '0',
                'target' => 15
            ],[
                'title' => 'Investigadores',
                'progress' => 0,
                'target' => 5
            ],[
                'title' => 'Reuniones de seguimiento',
                'progress' => 0,
                'target' => 5
            ],[
                'title' => 'Participantes en eventos',
                'progress' => 0,
                'target' => 400
            ],[
                'title' => 'Publicaciones cientificas',
                'progress' => 0,
                'target' => 3
            ],[
                'title' => 'Visitas a la web del proyecto',
                'progress' => Visitor::count(),
                'target' => 5000
            ],[
                'title' => 'Actos de difusión',
                'progress' => 0,
                'target' => 15
            ],[
                'title' => 'Nº de indicadores de vulnerabilidad ante el cambio climático desarrollados',
                'progress' => 0,
                'target' => 4
            ]
        ); 
        return view('Front.home.index', [
            'labelCards'    => $labelCards,
            'objectives'    => $objectives,
            'results'       => $results,
        ]);
    });
    Route::resource('/news', NewsController::class);
    Route::get('/statistics', function(){
        $indicators = array(
            [
                'title' => 'Indicadores de realización',
                'goals' => array(
                    [
                        "title" => "RCO 83-Estrategias y planes de acción desarrollados conjuntamente.",
                        "progress" => 0,
                        "target" => 1
                    ],
                    [
                        "title" => "RCO 84-Actividades piloto desarrolladas conjuntamente y ejecutadas en el proyecto.",
                        "progress" => 0,
                        "target" => 2
                    ],
                    [
                        "title" => "RCO 87-Organizaciones que cooperan a través de las fronteras.",
                        "progress" => 0,
                        "target" => 13
                    ]
                )
            ],
            [
                'title' => 'Indicadores de resultado',
                'goals' => array(
                    [
                        "title" => "RCR 84-Organizaciones que cooperan después de haber completado el proyecto.",
                        "progress" => 0,
                        "target" => 13
                    ],
                    [
                        "title" => "RCR 79-Estrategias conjuntas y planes de acción adoptados por organizaciones.",
                        "progress" => 0,
                        "target" => 1
                    ],
                )
            ],
            [
                'title' => 'Indicadores específicos del proyecto',
                'goals' => array(
                    [
                        "title" => "Nº de personas formadas a través de cursos online y participantes en seminarios y jornadas asociadas a actividades de ejecución (los alumnos participantes de las acciones formativas tendrán que inscribirse previamente en formularios habilitados a tal efecto. Se entrega copia de los formularios en los informes de seguimiento).",
                        "progress" => 0,
                        "target" => 350
                    ],
                    [
                        "title" => "Nº de reuniones de seguimiento del proyecto.",
                        "progress" => 0,
                        "target" => 5
                    ],
                    [
                        "title" => "Nº de indicadores de vulnerabilidad ante cambio climático desarrollados.",
                        "progress" => 0,
                        "target" => 4
                    ],
                    [
                        "title" => "Nº de convenios de colaboración entre los agentes implicados en el Observatorio del Cambio Climático.",
                        "progress" => 0,
                        "target" => 1
                    ],
                    [
                        "title" => "Nº de publicaciones científicas.",
                        "progress" => 0,
                        "target" => 3
                    ],
                    [
                        "title" => "Nº de investigadores formados.",
                        "progress" => 0,
                        "target" => 5
                    ],
                    [
                        "title" => "Nº de alumnos de primaria y secundaria sensibilizados.",
                        "progress" => 0,
                        "target" => 900
                    ],
                    [
                        "title" => "Nº de estudios realizados",
                        "progress" => 0,
                        "target" => 4
                    ],
                    [
                        "title" => "Nº de nuevos contratos de investigadores.",
                        "progress" => 0,
                        "target" => 6
                    ],
                )
            ],
            [
                'title' => 'Indicadores de comunicación',
                'goals' => array(
                    [
                        "title" => "Nº visitas a página web del proyecto.",
                        "progress" => 0,
                        "target" => 5000
                    ],
                    [
                        "title" => "Nº de actos de difusión en los medios de comunicación.",
                        "progress" => 0,
                        "target" => 15
                    ],
                    [
                        "title" => "Nº total de publicaciones realizadas.",
                        "progress" => 0,
                        "target" => 43
                    ],
                    [
                        "title" => "Nº de publicaciones realizadas en redes sociales.",
                        "progress" => 0,
                        "target" => 40
                    ],
                    [
                        "title" => "Nº publicaciones realizadas en formato físico.",
                        "progress" => 0,
                        "target" => 3
                    ],
                    [
                        "title" => "Nº de producciones audiovisuales.",
                        "progress" => 0,
                        "target" => 1
                    ],
                    [
                        "title" => "Nº eventos de comunicación realizados.",
                        "progress" => 0,
                        "target" => 10
                    ],
                    [
                        "title" => "Nº total de participantes en los eventos realizados.",
                        "progress" => 0,
                        "target" => 450
                    ],
                    [
                        "title" => "Nº total de mujeres en los eventos realizados.",
                        "progress" => 0,
                        "target" => 250
                    ],
                    [
                        "title" => "Nº total de participantes de los terceros países en los eventos realizados.",
                        "progress" => 0,
                        "target" => 50
                    ]
                )
            ],
        );
    
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