<?php

return [
    'widgets' => [
        'title_browsers'                         => 'Brauserid',
        'description_browsers'                   => 'Selle aruande abil saab vaadata külastuste arvu erinevatest brauseritest, mida inimesed saidi jõudmiseks kasutavad.',
        'browsers_report_height'                 => 'Diagrammi kõrgus',
        'browsers_report_height_validation'      => 'Täpsusta diagrammi kõrgus täisarvuna.',
        'title_toppages'                         => 'Lehtede TOP',
        'noresult_toppages'                      => 'Valitud intervallis pole lehtede kuvamisi.',
        'toppages_number'                        => 'Kuvatavate lehtede arv',
        'title_traffic_goal'                     => 'Liikluse siht',
        'traffic_goal_days'                      => 'Periood',
        'traffic_goal_goal'                      => 'Liikluse sihid, külastused',
        'traffic_goal_goal_description'          => 'Määra soovitud külastuste koguarv perioodi parameetriga määratud ajavahemiku kohta',
        'traffic_goal_goal_validation'           => 'Täpsustage liikluse siht täisarvuna.',
        'title_traffic_overview'                 => 'Liikluse ülevaade',
        'title_traffic_sources'                  => 'Liiklusallikad',
        'description_traffic_sources'            => 'Liiklusallikate aruandes kuvatakse sinu veebisaidile viiteallikad.',
        'traffic_sources_report_size'            => 'Diagrammi raadius',
        'traffic_sources_report_size_validation' => 'Palun täpsusta graafiku suurus täisarvuna',
        'traffic_sources_center'                 => 'Paiguta diagramm keskele',
        'traffic_sources_number'                 => 'Kuvatavate allikate arv',
        'display_description'                    => 'Näita aruande kirjeldust',
        'days'                                   => 'Päevade arv andmete kuvamiseks',
        'legend_as_table'                        => 'Kuva legend tabelina',
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
        'tab'      => 'Google Analytics plugin',
        'settings' => 'Seadete juurdepääs',
    ],
    'strings'     => [
        'plugin_desc'      => 'Google Analytics pakub jälgimist ja aruandlust.',
        'notconfigured'    => 'Google Analyticsi API-juurdepääs pole konfigureeritud. Palun konfigureeri see System/Settings/Google Analytics lehel.',
        'keynotuploaded'   => 'Google Analytics API privaatvõtit pole üles laaditud. Palun konfigureeri Google Analyticsi juurdepääs System/Settings/Google Analytics lehel.',
        'tracker'          => 'Google Analyticsi jälgija',
        'tracking'         => 'Jälgimine',
        'tracker_desc'     => 'Võimaldab lehel kuvada jälgimiskoodi.',
        'settings_desc'    => 'Google Analyticsi API-koodi ja jälgimisvalikute seadistamine.',
        'page_url'         => 'Lehe URL',
        'pageviews'        => 'Lehevaatamisi',
        'current'          => 'Praegu',
        'goal'             => 'Siht',
        'barchart_label'   => 'Google Analytics custom bar chart',
        'line_label'       => 'Google Analytics custom line chart',
        'piechart_label'   => 'Google Analytics custom pie chart',
    ],
    'settings'    => [
        'project_name'             => 'Google API Project nimi',
        'client_id'                => 'Google API Client ID',
        'app_email'                => 'E-posti aadress',
        'profile_id'               => 'Analytics View/Profile ID number',
        'gapi_key'                 => 'Privaatvõti',
        'tracking_id'              => 'Jälgimise ID',
        'anonymize_ip'             => 'Anonüümne IP',
        'domain_name'              => 'Domeeninimi',
        'project_name_comment'     => 'Projektiga määratud nimi Google API-konsoolis',
        'client_id_comment'        => 'Kliendi ID leiad Google API-konsoolis projekti lehel',
        'app_email_comment'        => 'Google API konsoolis loodud e-posti aadress',
        'profile_id_comment'       => 'Seda leiad Google Analytics Admin / View Settings lehelt',
        'gapi_key_comment'         => 'Privaatvõtme fail, mille olete alla laadinud Google API-konsoolist',
        'tracking_id_comment'      => 'Jälgimise ID leiad Admin / Property Settings lehelt',
        'anonymize_ip_comment'     => 'Aktiveeri külastajate IP anonüümsus',
        'domain_name_comment'      => 'Määra domeeninimi, mida soovid jälgida',
        'force_ssl'                => 'Force SSL',
        'force_ssl_comment'        => 'Andmete saatmiseks Google-ile kasuta alati SSL-i',
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
    ],
];
