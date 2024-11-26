<?php

namespace App\Http\Controllers;

use App\Models\informacion;
use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;


class PageController extends Controller
{
    //
    public function index()
    {
        $pageTitle = "Grupo Llyrod | Home";
        $metaData = [
            'robots' => 'index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1',
            'title' => 'Grupo Llyrod | Consultoría en Minería, Transformación Digital, Auditoría de la Calidad y Due Diligence',
            'description' => 'Grupo Llyrod, expertos en consultoría para proyectos de minería, transformación digital, auditoría de la calidad. ¡Transformamos tu negocio con soluciones a medida!',
            'keywords' => 'Minería, Transformación Digital, Due Diligence, Consultoría, Gestión de Proyectos, Consultoría en Minería, Consultoría en Transformación Digital, Consultoría en Auditoría de la Calidad, Consultoría en Due Diligence, Auditoría de Calidad',
            'image' => 'https://grupollyrod.com/assets/img/home/mineria_home.webp',
            'url' => 'https://grupollyrod.com/',
            'type' => 'website',
            'locale' => 'es_PE',
            'site_name' => 'Grupo Llyrod',
            'author' => 'Grupo Llyrod',
            'twitter' => [
                [
                    'type' => 'card',
                    'content' => 'summary_large_image'
                ],
                [
                    'type' => 'site',
                    'content' => '@grupollyrod'
                ],
                [
                    'type' => 'creator',
                    'content' => '@grupollyrod'
                ],
                [
                    'type' => 'title',
                    'content' => 'Grupo Llyrod | Consultoría en Minería, Transformación Digital, Auditoría de la Calidad y Due Diligence'
                ],
                [
                    'type' => 'description',
                    'content' => 'Grupo Llyrod, expertos en consultoría para proyectos de minería, transformación digital, auditoría de la calidad y calidad due diligence. ¡Transformamos tu negocio con soluciones a medida!'
                ],
                [
                    'type' => 'image',
                    'content' => 'https://grupollyrod.com/assets/img/home/mineria_home.webp'
                ]
            ],
            'og' => [
                [
                    'type' => 'title',
                    'content' => 'Grupo Llyrod | Consultoría en Minería, Transformación Digital, Auditoría de la Calidad y Due Diligence'
                ],
                [
                    'type' => 'description',
                    'content' => 'Grupo Llyrod, expertos en consultoría para proyectos de minería, transformación digital, auditoría de la calidad y calidad due diligence. ¡Transformamos tu negocio con soluciones a medida!'
                ],
                [
                    'type' => 'image',
                    'content' => 'https://grupollyrod.com/assets/img/home/mineria_home.webp'
                ],
                [
                    'type' => 'url',
                    'content' => 'https://grupollyrod.com/'
                ],
                [
                    'type' => 'type',
                    'content' => 'website'
                ],
                [
                    'type' => 'site_name',
                    'content' => 'Grupo Llyrod'
                ],
                [
                    'type' => 'locale',
                    'content' => 'es_PE'
                ],
                [
                    'type' => 'locale:alternate',
                    'content' => 'en_US'
                ],
                [
                    'type' => 'locale:alternate',
                    'content' => 'es_ES'
                ],
                [
                    'type' => 'locale:alternate',
                    'content' => 'es_CL'
                ]
            ]
        ];

        $cards = [
            [
                "id" => "mineria",
                "imagen" => "assets/img/home/mineria_home.webp",
                "tittle" => "Minería & Gestión Social",
                "data-aos" => "fade-right",
            ],
            [
                "id" => "due_diligence",
                "imagen" => "assets/img/home/inteligencia_home.webp",
                "tittle" => "Quality Due Diligence ",
                "data-aos" => "fade-up"
            ],
            [
                "id" => "tecnologia",
                "imagen" => "assets/img/home/incubadora_home.webp",
                "tittle" => "Transformación Digital",
                "data-aos" => "fade-left",
            ]
        ];


        $cliens = [
            [
                'nombre' => 'NTT data',
                'imagen' => 'assets/img/clients/NTT_DATA.webp',
                'imagenResponsive' => 'assets/img/clients/NTT_DATA.webp'
            ],
            [
                'nombre' => 'Founderz',
                'imagen' => 'assets/img/clients/Founderz.webp',
                'imagenResponsive' => 'assets/img/clients/Founderz.webp'
            ],
            [
                'nombre' => 'Minsur',
                'imagen' => 'assets/img/clients/MINSUR.webp',
                'imagenResponsive' => 'assets/img/clients/MINSUR.webp'
            ],
            [
                'nombre' => 'Minera Raura',
                'imagen' => 'assets/img/clients/MINERIA_RAURA.webp',
                'imagenResponsive' => 'assets/img/clients/MINERIA_RAURA.webp'
            ],
            [
                'nombre' => 'Insuco – Yanacocha',
                'imagen' => 'assets/img/clients/Insuco.webp',
                'imagenResponsive' => 'assets/img/clients/Insuco.webp'
            ],
            [
                'nombre' => 'Mar Co. Ltd. - Yamae Group Holding Japan – Japan',
                'imagen' => 'assets/img/clients/Mar_Co._Ltd.webp',
                'imagenResponsive' => 'assets/img/clients/Mar_Co._Ltd.webp'
            ],
            [
                'nombre' => 'Reybanpac – Ecuador',
                'imagen' => 'assets/img/clients/REYBANPAC.webp',
                'imagenResponsive' => 'assets/img/clients/REYBANPAC.webp'
            ],

            [
                'nombre' => 'Pesquera Reymar – Chile',
                'imagen' => 'assets/img/clients/PESQUEDA_REYMAR.webp',
                'imagenResponsive' => 'assets/img/clients/PESQUEDA_REYMAR.webp'
            ],

        ];




        return view('welcome', compact('cards', 'pageTitle', 'cliens', 'metaData'));
    }
    public function industria()
    {
        $pageTitle = "Llyrod | Nuestros Trabajos";
        $metaData = [
            'robots' => 'index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1',
            'title' => 'Grupo Llyrod | Nuestro Trabajo | Consultoría en Minería | Transformación Digital | Auditoria de la Calidad',
            'description' => 'Conoce los proyectos destacados de Grupo Llyrod en minería, transformación digital y auditoria de la calidad. Nuestra experiencia en gestión de proyectos se refleja en resultados exitosos para nuestros clientes.',
            'keywords' => 'Grupo Llyrod ,Proyectos de Minería, Consultoría en Transformación Digital, Gestión de Proyectos, Due Diligence, Casos de Éxito, Consultoría Empresarial, Consultoría en Minería, Consultoría en Transformación Digital , Auditoria de la Calidad',
            'image' => 'https://grupollyrod.com/assets/img/proyectos/proyecto_mineria.webp',
            'url' => url('nuestroTrabajo'),
            'type' => 'website',
            'locale' => 'es_PE',
            'site_name' => 'Grupo Llyrod',
            'author' => 'GrupoLlyrod',
            'twitter' => [
                [
                    'type' => 'card',
                    'content' => 'summary_large_image'
                ],
                [
                    'type' => 'site',
                    'content' => '@grupollyrod'
                ],
                [
                    'type' => 'creator',
                    'content' => '@grupollyrod'
                ],
                [
                    'type' => 'title',
                    'content' => 'Grupo Llyrod | Nuestro Trabajo | Consultoría en Minería | Transformación Digital | Auditoria de la Calidad',
                ],
                [
                    'type' => 'description',
                    'content' => 'Conoce los proyectos destacados de Grupo Llyrod en minería, transformación digital y auditoria de la calidad. Nuestra experiencia en gestión de proyectos se refleja en resultados exitosos para nuestros clientes.'
                ],
                [
                    'type' => 'image',
                    'content' => 'https://grupollyrod.com/assets/img/proyectos/proyecto_mineria.webp'
                ]
            ],
            'og' => [
                [
                    'type' => 'title',
                    'content' => 'Grupo Llyrod | Nuestro Trabajo | Consultoría en Minería | Transformación Digital | Auditoria de la Calidad',
                ],
                [
                    'type' => 'description',
                    'content' => 'Conoce los proyectos destacados de Grupo Llyrod en minería, transformación digital y auditoria de la calidad. Nuestra experiencia en gestión de proyectos se refleja en resultados exitosos para nuestros clientes.'
                ],
                [
                    'type' => 'image',
                    'content' => 'https://grupollyrod.com/assets/img/proyectos/proyecto_mineria.webp'
                ],
                [
                    'type' => 'url',
                    'content' => url('nuestroTrabajo')
                ],
                [
                    'type' => 'type',
                    'content' => 'website'
                ],
                [
                    'type' => 'site_name',
                    'content' => 'Grupo Llyrod'
                ],
                [
                    'type' => 'locale',
                    'content' => 'es_PE'
                ],
                [
                    'type' => 'locale:alternate',
                    'content' => 'en_US'
                ],
                [
                    'type' => 'locale:alternate',
                    'content' => 'es_PE'
                ],
                [
                    'type' => 'locale:alternate',
                    'content' =>  'es_CL'
                ]
            ]
        ];


        $cardsMineria = [
            [
                "imagenes" => [
                    [
                        "imagen" => "assets/industrial/mineria/DiagnósticoPotencialRaura/diagnostico1.webp",
                        "alt" => "Diagnostico 1"
                    ],
                    [
                        "imagen" => "assets/industrial/mineria/DiagnósticoPotencialRaura/diagnostico2.webp",
                        "alt" => "Diagnostico 2"
                    ],
                    [
                        "imagen" => "assets/industrial/mineria/DiagnósticoPotencialRaura/diagnostico3.webp",
                        "alt" => "Diagnostico 3"
                    ],
                    [
                        "imagen" => "assets/industrial/mineria/DiagnósticoPotencialRaura/diagnostico4.webp",
                        "alt" => "Diagnostico 4"
                    ],
                    [
                        "imagen" => "assets/industrial/mineria/DiagnósticoPotencialRaura/PowerBI.webp",
                        "alt" => "Diagnostico 5"
                    ]
                ],
                "tittle" => "Diagnóstico Socioeconómico y Diseño del Portafolio de Inversión Social",
                "texto" =>
                "El diagnóstico abarcó 43,616 hectáreas y benefició a 1,536 habitantes en tres regiones del Perú. Incluyó un análisis socioeconómico, evaluación de actividades productivas, condiciones endémicas y oportunidades comerciales, estructurando proyectos alineados a estas potencialidades para optimizar el impacto de las inversiones sociales en las comunidades.",
                'icons' => [
                    [
                        'icon' => 'fa-solid fa-chart-simple',
                        'tittle' => 'Visualizadores en PBI',
                        'color' => '#F0CA18',
                        'texto' => 'Diseño de un Dashboard en Power BI para una consulta ágil y sencilla de todos los indicadores resultantes del estudio, por región, comunidad, caserío, geo-referenciado y conectado a google maps.'
                    ],
                    [
                        'icon' => 'fa-solid fa-database',
                        'tittle' => 'Base de datos',
                        'color' => '#2497F0',
                        'texto' => 'Desarrollamos una base de datos en Big Query que centraliza la información recogida en campo, vinculando a los indicadores regionales que posee el estado.'
                    ],
                    [
                        'icon' => 'fa-solid fa-cloud',
                        'tittle' => 'Portafolio en GCP',
                        'color' => '#3A8AC0',
                        'texto' => 'El registro de datos del estudio está disponible en nube, Google Cloud Platform, facilitando al usuario la consulta y procesamiento de datos posterior.'
                    ]
                ],
                "fondo" => "assets/industrial/mineria/DiagnósticoPotencialRaura/Fondo.webp"
            ],
            [
                "imagenes" => [
                    [
                        "imagen" => "assets/industrial/mineria/PlanPrevencion/mineria1.webp",
                        "alt" => "Plan de prevencion 1"
                    ],
                    [
                        "imagen" => "assets/industrial/mineria/PlanPrevencion/mineria2.webp",
                        "alt" => "Plan de prevencion 2"
                    ],
                    [
                        "imagen" => "assets/industrial/mineria/PlanPrevencion/mineria3.webp",
                        "alt" => "Plan de prevencion 3"
                    ]
                ],
                "tittle" => 'Plan de prevención de fenómeno de "El Niño" ',
                "texto" =>
                "Frente a la posible afectación del aparato productivo por el fenómeno de El Niño en 2023, se analizó la base de datos climatológica y se modelaron escenarios. Este estudio consideró condiciones sectoriales y datos de instancias gubernamentales. Además, usamos tecnología avanzada para facilitar el acceso a la información de manera ágil y sencilla.",

                'icons' => [
                    [
                        'icon' => 'fa-solid fa-chart-simple',
                        'tittle' => 'Visualizador en PBI',
                        'color' => '#F0CA18',
                        'texto' => 'Dashboard interactivo con información climatológica, análisis por sector y plan de prevención según peligros y vulnerabilidades identificadas.'
                    ],
                    [
                        'icon' => 'fa-solid fa-database',
                        'tittle' => 'Base de Datos Sectorial',
                        'color' => '#2497F0',

                        'texto' => 'Contamos con una base de datos robusta que integra información sectorial relevante y estudios de diversas entidades gubernamentales, permitiendo un acceso organizado a datos clave para la toma de decisiones preventivas.'
                    ],
                    [
                        'icon' => 'fa-solid fa-cloud',
                        'tittle' => 'Acceso a la Nube GCP',
                        'color' => '#3A8AC0',
                        'texto' => 'Accedemos a la plataforma de GCP para facilitar la consulta de información, estando a disposición del usuario en tiempo real.'
                    ]
                ],


                "fondo" => "assets/industrial/mineria/PlanPrevencion/Fondo.webp"
            ],
            [
                "imagenes" => [
                    [
                        "imagen" => "assets/industrial/mineria/CapacitacionGanadera/capacitacion1.webp",
                        "alt" => "capacitacion1"
                    ],
                    [
                        "imagen" => "assets/industrial/mineria/CapacitacionGanadera/capacitacion2.webp",
                        "alt" => "capacitacion2"
                    ],
                    [
                        "imagen" => "assets/industrial/mineria/CapacitacionGanadera/capacitacion3.webp",
                        "alt" => "capacitacion3"
                    ],
                    [
                        "imagen" => "assets/industrial/mineria/CapacitacionGanadera/capacitacion4.webp",
                        "alt" => "capacitacion4"
                    ]
                ],
                "tittle" => "Fortalecimiento de capacidades. ",
                "texto" =>
                "Impulsamos el desarrollo técnico con nuevas tecnologías educativas, promoviendo prácticas que mejoran la eficiencia, cuidan los recursos naturales y aseguran sostenibilidad. Metodologías adaptadas a las realidades de cada región son nuestro diferenciador. Acceso a la línea base y resultados mediante plataformas desarrolladas por nuestros profesionales.",
                'icons' => [
                    [
                        'icon' => 'fa-solid fa-chart-simple',
                        'tittle' => 'Análisis de datos',
                        'color' => '#F0CA18',
                        'texto' => 'Utilizamos herramientas avanzadas de análisis para transformar datos en información útil. Esto permite la toma de decisiones fundamentadas y una planificación estratégica basada en resultados medibles.'
                    ],
                    [
                        'icon' => 'fa-solid fa-database',
                        'tittle' => 'Base de datos',
                        'color' => '#2497F0',
                        'texto' => 'Almacenamos y gestionamos datos de manera segura y eficiente, asegurando accesibilidad y protección de la información para sustentar procesos sostenibles y mejorar la efectividad operativa.'
                    ],
                    [
                        'icon' => 'fa-solid fa-cloud',
                        'tittle' => 'Nube',
                        'color' => '#3A8AC0',
                        'texto' => 'Aprovechamos la tecnología en la nube para ofrecer soluciones escalables y accesibles desde cualquier lugar, facilitando la colaboración en tiempo real y la optimización de recursos tecnológicos.'
                    ]


                ],
                "fondo" => "assets/industrial/mineria/CapacitacionGanadera/Fondo.webp"
            ],
        ];

        $cardsBi = [
            [
                "imagenes" => [

                    "imagen" => "assets/industrial/tranformacionDigital/tranformacionDigital1.webp",
                    "alt" => "Programas de Aprendizaje para empresas. "

                ],
                "tittle" => "Programas de Aprendizaje para empresas. ",
            ],
            [
                "imagenes" => [

                    "imagen" => "assets/industrial/tranformacionDigital/tranformacionDigital2.webp",
                    "alt" => "Entrenamiento para Data Engineers Jr "

                ],
                "tittle" => "Entrenamiento para Data Engineers Jr ",
            ],
            [
                "imagenes" => [

                    "imagen" => "assets/industrial/tranformacionDigital/tranformacionDigital3.webp",
                    "alt" => "Outsourcing especializado "

                ],
                "tittle" => "Outsourcing especializado ",

            ],
        ];

        $cardsTecnologia = [
            [
                "imagenes" => [
                    "imagen" => "assets/industrial/inteligenciaNegocios/inteligencia1.webp",
                    "alt" => "transformacion1"
                ],
                "tittle" => "Monitoreo y análisis de datos de almacenes desde Japón.",
            ],
            [
                "imagenes" => [
                    "imagen" => "assets/industrial/inteligenciaNegocios/inteligencia2.webp",
                    "alt" => "transformacion1"
                ],
                "tittle" => "Monitoreo y análisis de exportación bananera desde Ecuador.",
            ],
            [
                "imagenes" => [
                    "imagen" => "assets/industrial/inteligenciaNegocios/inteligencia3.webp",
                    "alt" => "transformacion1"
                ],
                "tittle" => "Monitoreo y Análisis de Datos hidrobiológicos desde chile.",
            ],

        ];



        return view('industrias', compact('cardsMineria', 'cardsTecnologia', 'cardsBi', 'pageTitle', 'metaData'));
    }
    public function contact()
    {
        $pageTitle = "Llyrod | Contacto";
        $metaData = [
            'robots' => 'index, follow',
            'title' => 'Grupo Llyrod | Contáctanos | Asesoría en Minería y Transformación Digital',
            'description' => '¿Necesitas asesoría en minería o transformación digital? Ponte en contacto con Grupo Llyrod para obtener soluciones personalizadas a tus necesidades.',
            'keywords' => 'Contacto, Consultoría en Minería, Consultoría Digital, Contacto Empresarial, Asesoría en Proyectos, Consultoría en Transformación Digital',
            'image' => asset('assets/img/contactanos/contacto.webp'),
            'url' => "https://grupollyrod.com/contacto/",
            'type' => 'website',
            'locale' => 'es_PE',
            'site_name' => 'Grupo Llyrod',
            'author' => 'Grupo Llyrod',
            'twitter' => [
                [
                    'type' => 'twitter_card',
                    'content' => 'summary_large_image'
                ],
                [
                    'type' => 'twitter_site',
                    'content' => '@grupollyrod'
                ],
                [
                    'type' => 'twitter_creator',
                    'content' => '@grupollyrod'
                ],
                [
                    'type' => 'twitter_title',
                    'content' => 'Grupo Llyrod | Contáctanos | Asesoría en Minería y Transformación Digital'
                ],
                [
                    'type' => 'twitter_description',
                    'content' => '¿Necesitas asesoría en minería o transformación digital? Ponte en contacto con Grupo Llyrod para obtener soluciones personalizadas a tus necesidades.'
                ],
                [
                    'type' => 'twitter_image',
                    'content' => asset('assets/img/contactanos/contacto.webp')
                ]
            ],
            'og' => [
                [
                    'type' => 'og_title',
                    'content' => 'Grupo Llyrod | Contáctanos | Asesoría en Minería , Transformación Digital y Auditoria de la Calidad'
                ],
                [
                    'type' => 'og_description',
                    'content' => '¿Necesitas asesoría en minería , transformación digital o auditoria de la calidad? Ponte en contacto con Grupo Llyrod para obtener soluciones personalizadas a tus necesidades.'
                ],
                [
                    'type' => 'og_image',
                    'content' => asset('assets/img/contactanos/contacto.webp')
                ],
                [
                    'type' => 'og_url',
                    'content' => url('contactanos')
                ],
                [
                    'type' => 'og_type',
                    'content' => 'website'
                ],
                [
                    'type' => 'og_site_name',
                    'content' => 'Grupo Llyrod'
                ],
                [
                    'type' => 'og_locale',
                    'content' => 'es_PE'
                ],
                [
                    'type' => 'og_locale_alternate',
                    'content' => 'en_US'
                ],
                [
                    'type' => 'og_locale_alternate',
                    'content' => 'es_PE'
                ],
                [
                    'type' => 'og_locale_alternate',
                    'content' => 'es_CL'
                ]

            ],
        ];

        return view('contact', compact('pageTitle', 'metaData'));
    }

    public function enviarGmail(Request $request)
    {

        try {

            $interesado = $request->checkedInteresado;
            $apellido = $request->apellido;
            $compania = $request->compania;
            $cargo = $request->cargo;
            $email = $request->correo;
            $telefono = $request->telefono;
            $name = $request->nombre;
            $message = $request->mensaje;
            $checkedInformacion = $request->checkedInformacion;

            $informacacion = informacion::create([
                'interesado' => $interesado,
                'name' => $name,
                'apellido' => $apellido,
                'compania' => $compania,
                'cargo' => $cargo,
                'email' => $email,
                'telefono' => $telefono,
                'message' => $message,
                'checkedInformacion' => $checkedInformacion
            ]);
            if ($informacacion) {
                $emailOuput = "administracion@grupollyrod.com";
                $header = "From: noreply@grupollyrod.com" . "\r\n";
                $header .= "Reply-To: noreply@grupollyrod.com" . "\r\n";
                $header .= "X-Mailer: PHP/" . phpversion() . "\r\n";
                $header .= "MIME-Version: 1.0" . "\r\n";
                $header .= "Content-Type: text/html; charset=UTF-8" . "\r\n";

                $message = "
                El usuario $name  $apellido tiene el siguiente interés: $interesado <br>
                es de la empresa $compania <br>
                con el cargo de $cargo <br>
                tiene el número de teléfono $telefono <br>
                y recibir información adicional: $checkedInformacion <br>
                 con el correo $email ha enviado el siguiente mensaje: <br> $message";

                $mail = mail($emailOuput, "Contacto desde la web", $message, $header);
            } else {
                return redirect('contactanos')->with('success', "Error al enviar el correo");
            }


            if ($mail) {
                return redirect('contactanos')->with('success', "Correo enviado correctamente");
            } else {
                return redirect('contactanos')->with('success', "Error al enviar el correo");
            }
        } catch (\Throwable $th) {
            return redirect('contactanos')->with('success', $th->getMessage());
        }
    }
}
