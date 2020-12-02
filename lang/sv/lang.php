<?php

return [
    'widgets' => [
        'title_browsers'              => 'Webbläsare',
        'description_browsers'        => 'Denna rapporten låter dig se antalet besökare från de olika webbläsare folk använder för att besöka din sajt.',
        'title_toppages'              => 'Toppsidor',
        'noresult_toppages'           => 'Det fanns inga sidvisningar i det valda intervallet.',
        'title_traffic_goal'          => 'Trafikmål',
        'title_traffic_overview'      => 'Trafiköversikt',
        'title_traffic_sources'       => 'Trafikkällor',
        'description_traffic_sources' => 'Rapporten över trafikkällorna visar vart hänvisningarna till din sajt kommer ifrån.',
        'jsevents_title'              => 'Javascript and Ajax Error Checking',
        'jsevents_category'           => 'JS Error, jQuery Error and Ajax Error',
        'jsevents_name'               => 'Widget title',
        'jsevents_catname'            => 'Category filter',
        'jsevents_daystitle'          => 'Number of days to display data for',
        'jsevents_numbertitle'        => 'Number of items to display',
        'jsevents_valname'            => 'The Widget Title is required.',
        'jsevents_valcat'             => 'The category is required.',
        'jsevents_error'              => 'Invalid days value: ',
        'jsevents_error2'             => 'Invalid goal value: ',
        'jsevents_error3'             => 'No traffic found yet.',
        'jsevents1'                   => 'Type of Error',
        'jsevents2'                   => 'Error Description',
        'jsevents3'                   => 'Error Location',
        'jsevents4'                   => '% of all events',
        'jsevents5'                   => 'There were no events in the selected interval.',
    ],
    'permissions' => [
        'tab'      => 'Google Analytics Plugin',
        'settings' => 'Åtkomstinställningar',
    ],
    'strings'     => [
        'plugin_desc'      => 'Föreser rapporter från Google Analytics spårning.',
        'notconfigured'    => 'API-åtkomsten för Google Analytics är inte konfigurerad. Var vänligen konfigurera det i sidan under System / Inställningar / Google Analytics.',
        'keynotuploaded'   => 'Den privata API-nyckeln för Google Analytics är inte uppladdad. Var vänligen konfigurera det i sidan under System / Inställningar / Google Analytics.',
        'tracker'          => 'Google Analytics spårning',
        'tracking'         => 'Spårning',
        'tracker_desc'     => 'Utmatar en spårningskod på en sida.',
        'settings_desc'    => 'Konfigurera API-koden och spårningsinställningar för Google Analytics.',
        'page_url'         => 'Sid-URL',
        'pageviews'        => 'Sidvisningar',
        'current'          => 'Nuvarande',
        'goal'             => 'Mål',
        'barchart_label'   => 'Google Analytics custom bar chart',
        'line_label'       => 'Google Analytics custom line chart',
        'piechart_label'   => 'Google Analytics custom pie chart',
    ],
    'settings'    => [
        'project_name'             => 'Google API projektnamn',
        'client_id'                => 'Google API klient-ID',
        'app_email'                => 'E-postadress',
        'profile_id'               => 'ID-nummer för Analytics Vy/Profil',
        'gapi_key'                 => 'Privat nyckel',
        'tracking_id'              => 'Spårnings-ID',
        'domain_name'              => 'Domännamn',
        'project_name_comment'     => 'Namnet du tilldelade projektet när det skapades i Googles API-konsol',
        'client_id_comment'        => 'Du kan hitta klient-ID:t på projektsida in Googles API-konsol',
        'app_email_comment'        => 'E-postadressen som skapades av Googles API-konsol',
        'profile_id_comment'       => 'Du kan hitta det på sidan under Google Analytics Admin / Visa Inställningar',
        'gapi_key_comment'         => 'Den privata nyckelfillen du laddade ner från Googles API-konsol',
        'tracking_id_comment'      => 'Du kan hitta spårnings-ID:t på sidan under Admin / Egendomsinställningar',
        'domain_name_comment'      => 'Specificera domännamnet du ska spåra',
        'measurement_id'           => 'Measurement ID',
        'measurement_id_comment'   => 'The measurement id starts with G- and contains letters and numbers.',
        'stream_id'                => 'Stream ID',
        'stream_id_comment'        => 'The stream id contains numbers only.',
        'conversion_id'            => 'Conversion ID',
        'conversion_id_comment'    => 'The conversion id starts with AW- and contains numbers afterwards.',
        'conversion_label'         => 'Conversion Label',
        'conversion_label_comment' => 'The conversion label contains letters and numbers.',
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
    'barchart'   => [
        'widget_title'          => 'Widget title',
        'bar_chart'             => 'Bar Chart',
        'widget_title_required' => 'The Widget Title is required.',
        'dimension'             => 'Dimension',
        'invalid_dimension'     => 'That does not appear to be a valid analytics dimension',
        'metric'                => 'Metric',
        'invalid_metric'        => 'That does not appear to be a valid analytics metric.',
        'chart_height'          => 'Chart height',
        'invalid_chart_height'  => 'Please specify the chart height as an integer value.',
        'legend_as_table'       => 'Display legend as a table',
        'days_to_display'       => 'Days to display',
        'results_to_display'    => 'Results to display',
        'zero_displays_all'     => 'A value of 0 will display all results.',
        'raport_description'    => 'Report description',
    ],
    'line' => [
        'widget_title'       => 'Widget title',
        'line_chart'         => 'Line Chart',
        'title_required'     => 'The Widget Title is required.',
        'dimension'          => 'Dimension',
        'invalid_dimension'  => 'That does not appear to be a valid analytics dimension.',
        'metric'             => 'Metric',
        'invalid_metric'     => 'That does not appear to be a valid analytics metric.',
        'dimension_label'    => 'Dimension label',
        'metric_label'       => 'Metric label',
        'days_to_display'    => 'Days to display',
        'results_to_display' => 'Results to display',
        'zero_displays_all'  => 'A value of 0 will display all results.',
    ],
    'piechart' => [
        'widget_title'       => 'Widget title',
        'pie_chart'          => 'Pie Chart',
        'title_required'     => 'The Widget Title is required.',
        'dimension'          => 'Dimension',
        'invalid_dimension'  => 'That does not appear to be a valid analytics dimension.',
        'metric'             => 'Metric',
        'invalid_metric'     => 'That does not appear to be a valid analytics metric.',
        'chart_radius'       => 'Chart radius',
        'chart_size_invalid' => 'Please specify the chart size as an integer value.',
        'center_chart'       => 'Center the chart',
        'legend_as_table'    => 'Display legend as a table',
        'display_total'      => 'Display total',
        'days_to_display'    => 'Days to display',
        'results_to_display' => 'Results to display',
        'zero_displays_all'  => 'A value of 0 will display all results.',
        'report_description' => 'Report description',
    ],
    'errors' => [
        'invalid_days'      => 'Invalid days value: ',
        'invalid_dimension' => 'Invalid dimension value: ',
        'invalid_metric'    => 'Invalid metric value: ',
        'results'           => 'There were no results to display.',
    ]
];
