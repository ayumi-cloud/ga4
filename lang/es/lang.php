<?php

return [
    'widgets' => [
        'title_browsers'                         => 'Navegadores',
        'description_browsers'                   => 'Este reporte muestra el número de visitas distribuídas por los navegadores utilizados para acceder a su sitio.',
        'browsers_report_height'                 => 'Altura del gráfico',
        'browsers_report_height_validation'      => 'Por favor especifique la altura del gráfico como un valor entero.',
        'title_toppages'                         => 'Páginas Principales',
        'noresult_toppages'                      => 'No se registraron páginas vistas en el intervalo seleccionado.',
        'toppages_number'                        => 'Cantidad de páginas a mostrar',
        'title_traffic_goal'                     => 'Objetivo de Tráfico',
        'traffic_goal_days'                      => 'Período',
        'traffic_goal_goal'                      => 'Objetivo, visitas',
        'traffic_goal_goal_description'          => 'Especifique el número total de visitas deseadas para el período definido en el parámetro Período.',
        'traffic_goal_goal_validation'           => 'Por favor especifique el objetivo de tráfico como un valor entero,',
        'title_traffic_overview'                 => 'Visión general',
        'title_traffic_sources'                  => 'Fuentes de tráfico',
        'description_traffic_sources'            => 'El reporte de fuentes de tráfico muestra la fuente de referencias a su sitio web.',
        'traffic_sources_report_size'            => 'Radio del gráfico',
        'traffic_sources_report_size_validation' => 'Por favor especifique el tamaño del gráfico como un valor entero',
        'traffic_sources_center'                 => 'Centrar el gráfico',
        'traffic_sources_number'                 => 'Número de fuentes a mostrar',
        'display_description'                    => 'Muestra la descripción del reporte',
        'days'                                   => 'Número de días a mostrar',
        'legend_as_table'                        => 'Mostrar leyenda como tabla',
        'jsevents_title'                         => 'Javascript and Ajax Error Checking',
        'jsevents_category'                      => 'JS Error, jQuery Error and Ajax Error',
        'jsevents_name'                          => 'Widget title',
        'jsevents_catname'                       => 'Category filter',
        'jsevents_daystitle'                     => 'Number of days to display data for',
        'jsevents_numbertitle'                   => 'Number of items to display',
        'jsevents_valname'                       => 'The Widget Title is required.',
        'jsevents_valcat'                        => 'The category is required.',
        'jsevents_error'                         => 'Invalid days value: ',
        'jsevents_error2'                        => 'Invalid goal value: ',
        'jsevents_error3'                        => 'No traffic found yet.',
        'jsevents1'                              => 'Type of Error',
        'jsevents2'                              => 'Error Description',
        'jsevents3'                              => 'Error Location',
        'jsevents4'                              => '% of all events',
        'jsevents5'                              => 'There were no events in the selected interval.',
    ],
    'permissions' => [
        'tab'      => 'Google Analytics',
        'settings' => 'Acceder a la configuración',
    ],
    'strings'     => [
        'plugin_desc'    => 'Provee seguimiento e informes de Google Analytics.',
        'notconfigured'  => 'No se ha configurado el acceso a la API de Google Analytics. Por favor configúrela en la página Sistema / Configuración / Google Analytics.',
        'keynotuploaded' => 'No se ha cargado la clave privada del API de Google Analytics. Por favor configure el acceso a Google Analytics en la página Sistema / Configuración / Google Analytics.',
        'tracker'        => 'Seguimiento de Google Analytics',
        'tracking'       => 'Siguiendo',
        'tracker_desc'   => 'Escribe el código de seguimiento de tráfico en una página.',
        'settings_desc'  => 'Configura las opciones de seguimiento y del API de Google Analytics.',
        'page_url'       => 'URL de la Página',
        'pageviews'      => 'Páginas vistas',
        'current'        => 'Actual',
        'goal'           => 'Objetivo'
    ],
    'settings'    => [
        'project_name'             => 'Nombre de proyecto API de Google',
        'client_id'                => 'ID de Cliente de API de Google',
        'app_email'                => 'Correo electrónico',
        'profile_id'               => 'Id de Vista/Perfil de Analytics',
        'gapi_key'                 => 'Clave Privada',
        'tracking_id'              => 'ID de seguimiento',
        'anonymize_ip'             => 'Anonimizar IP',
        'domain_name'              => 'Dominio',
        'project_name_comment'     => 'El nombre de proyecto asignado al momento de crearlo en Google API Console',
        'client_id_comment'        => 'Puedes encontrar el ID de cliente la página del proyecto en Google API Console',
        'app_email_comment'        => 'El correo electrónico generado en Google API Console',
        'profile_id_comment'       => 'Puedes encontrarlo en la página Administrar / Configuración de la Vista de Google Analytics',
        'gapi_key_comment'         => 'La clave privada que descargaste desde Google API Console',
        'tracking_id_comment'      => 'Puedes encontrar el ID de seguimiento en la página Administrar / Configuración de la propiedad',
        'anonymize_ip_comment'     => 'Activar la anonimización de IP para visitantes',
        'domain_name_comment'      => 'Especificar el dominio al que se le hará seguimiento',
        'force_ssl'                => 'Forzar SSL',
        'force_ssl_comment'        => 'Siempre usar SSL para enviar datos a Google',
        'measurement_id'           => 'Measurement ID',
        'measurement_id_comment'   => 'measurement_id_comment',
        'stream_id'                => 'Stream ID',
        'stream_id_comment'        => 'stream_id_comment',
        'conversion_id'            => 'Conversion ID',
        'conversion_id_comment'    => 'conversion_id_comment',
        'conversion_label'         => 'Conversion Label',
        'conversion_label_comment' => 'conversion_label_comment',
    ],
    'report_widgets' => [
        'trafficOverview' => 'Google Analytics Traffic Overview',
        'trafficSources'  => 'Google Analytics Traffic Sources',
        'browsers'        => 'Google Analytics Browsers',
        'trafficGoal'     => 'Google Analytics Traffic Goal',
        'topPages'        => 'Google Analytics Top Pages',
        'jsEvents'        => 'Website Javascript Errors',
    ],
    'config' => [
        'label' => 'Google Analytics 4',
    ],
];
