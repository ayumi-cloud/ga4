<?php

return [
    'widgets' => [
        'title_browsers'              => 'Browsers',
        'description_browsers'        => 'Toont een overzicht van browsers die bezoekers gebruiker om je website te bezoeken.',
        'title_toppages'              => 'Top Pagina\'s',
        'noresult_toppages'           => 'Er zijn geen paginaweergaves voor de ingestelde interval',
        'title_traffic_goal'          => 'Doelen',
        'title_traffic_overview'      => 'Overzicht verkeer',
        'title_traffic_sources'       => 'Verwijzende sites',
        'description_traffic_sources' => 'Toont verwijzende sites die een link hebben naar je website.',
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
    'strings' => [
        'page_url'         => 'Pagina URL',
        'pageviews'        => 'Paginaweergaves',
        'current'          => 'Huidig',
        'goal'             => 'Goal',
        'barchart_label'   => 'Google Analytics custom bar chart',
        'line_label'       => 'Google Analytics custom line chart',
        'piechart_label'   => 'Google Analytics custom pie chart',
    ],
    'settings'    => [
        'project_name'             => 'Google API Projektin nimi',
        'client_id'                => 'Google API Client ID',
        'app_email'                => 'Sähköpostiosoite',
        'profile_id'               => 'Analytics -näkymä/Profiilin ID numero',
        'gapi_key'                 => 'Yksityinen avain',
        'tracking_id'              => 'Seuranta ID',
        'anonymize_ip'             => 'Anonymisoi IP',
        'domain_name'              => 'Verkkotunnus (domain)',
        'project_name_comment'     => 'Projektille määritetty nimi, kun se on luotu Google API Konsolissa',
        'client_id_comment'        => 'Client ID löytyy projektisivulta Google API Konsolissa',
        'app_email_comment'        => 'Google API Konsolin generoima sähköpostiosoite',
        'profile_id_comment'       => 'Löydät sen Google Analytics / Järjestelmänvalvoja / Näkymän asetukset -sivulta',
        'gapi_key_comment'         => 'Yksityinen avain, jonka latasit Google API Konsolista',
        'tracking_id_comment'      => 'Löydät Seuranta ID:n Admin / Property Settings -sivulta',
        'anonymize_ip_comment'     => 'Aktivoi IP anonymisointi vierailijoille',
        'domain_name_comment'      => 'Määrittele verkkotunnus, jota aiot seurata',
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
