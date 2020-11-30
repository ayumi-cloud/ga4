<?php
return [
    'permissions' => [
        'tab'      => 'Google Analytics Plugin',
        'settings' => 'Přístup k nastavení',
    ],
    'strings'     => [
        'plugin_desc'    => 'Poskytuje měření do Google Analytics a zobrazování statistik návštěvnosti.',
        'notconfigured'  => 'Google Analytics API přístup není aktivní. Prosím nastavte ho na stránce System / Nastavení / Google Analytics.',
        'keynotuploaded' => 'Google Analytics API privátní klíč není nahraný. Prosím nahrajte ho na stránce System / Nastavení / Google Analytics.',
        'tracker'        => 'Google Analytics měřící kód',
        'tracking'       => 'Měření',
        'tracker_desc'   => 'Vypíše měřící kód na stránce.',
        'settings_desc'  => 'Nastavte Google Analytics API kód a parametry měření.',
    ],
    'settings'    => [
        'project_name'             => 'Název projektu v Google API',
        'client_id'                => 'Google API Client ID',
        'app_email'                => 'E-mailová adresa',
        'profile_id'               => 'Analytics View/Profilové ID',
        'gapi_key'                 => 'Privátní klíč',
        'tracking_id'              => 'Měřící číslo',
        'domain_name'              => 'Název domény',
        'project_name_comment'     => 'Název projektu vytvořený v Google API Console',
        'client_id_comment'        => 'Client ID můžete najít v Google API Console v detailu projektu',
        'app_email_comment'        => 'E-mailová adresa vygenerovaná v Google API Console',
        'profile_id_comment'       => 'Profilové ID najdete v Google Analytics na stránce Admin / Zobrazit nastavní (View settings)',
        'gapi_key_comment'         => 'Privátní klíč stažený z Google API Console',
        'tracking_id_comment'      => 'Měřící číslo najdete na stránce Admin / Property Settings v Google Analytics',
        'domain_name_comment'      => 'Název domény, kterou chcete měřit',
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
