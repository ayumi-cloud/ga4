<?php
return [
    'widgets' => [
        'title_browsers'                         => 'Browsers',
        'description_browsers'                   => 'This report lets you see the number of visits from different browsers people use to reach your site.',
        'browsers_report_height'                 => 'Chart height',
        'browsers_report_height_validation'      => 'Please specify the chart height as an integer value.',
        'title_toppages'                         => 'Top Pages',
        'noresult_toppages'                      => 'There were no pageviews in the selected interval.',
        'toppages_number'                        => 'Number of pages to display',
        'title_traffic_goal'                     => 'Traffic Goal',
        'traffic_goal_days'                      => 'Period',
        'traffic_goal_goal'                      => 'Traffic goal, visits',
        'traffic_goal_goal_description'          => 'Specify the total number of desired visits per the period defined with the Period parameter',
        'traffic_goal_goal_validation'           => 'Please specify the traffic goal as an integer value.',
        'title_traffic_overview'                 => 'Traffic overview',
        'title_traffic_sources'                  => 'Traffic Sources',
        'description_traffic_sources'            => 'The traffic sources report displays the source of referrals to your website.',
        'traffic_sources_report_size'            => 'Chart radius',
        'traffic_sources_report_size_validation' => 'Please specify the chart size as an integer value',
        'traffic_sources_center'                 => 'Center the chart',
        'traffic_sources_number'                 => 'Number of sources to display',
        'display_description'                    => 'Display the report description',
        'days'                                   => 'Number of days to display data for',
        'legend_as_table'                        => 'Display legend as a table',
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
        'tab'      => 'Wtyczka GoogleAnalytics',
        'settings' => 'Dostęp do ustawień',
        'widgets'  => 'View dashboard widgets',
    ],
    'strings'     => [
        'plugin_desc'          => 'Umożliwia śledzenie i raportowanie za pomocą Google Analytics.',
        'notconfigured'        => 'Dostęp do API Google Analytics API jest nieskonfigurowany. Skonfiguruj go w zakładce Ustawienia / Google Analytics',
        'keynotuploaded'       => 'Klucz prywatny Google Analytics API nie został załadowany. Skonfiguruj wtyczkę w zakładce Ustawienia / Google Analytics',
        'tracker'              => 'Tracker Google Analytics',
        'tracking'             => 'Śledzenie',
        'tracker_desc'         => 'Umieszcza kod śledzący na stronie.',
        'settings_desc'        => 'Skonfiguruj API Google Analytics oraz opcja śledzenia.',
        'jsevents_title'       => 'Javascript and Ajax Error Checking',
        'jsevents_category'    => 'JS Error, jQuery Error and Ajax Error',
        'jsevents_name'        => 'Widget title',
        'jsevents_catname'     => 'Category filter',
        'jsevents_daystitle'   => 'Number of days to display data for',
        'jsevents_numbertitle' => 'Number of items to display',
        'jsevents_valname'     => 'The Widget Title is required.',
        'jsevents_valcat'      => 'The category is required.',
        'jsevents_error'       => 'Invalid days value: ',
        'jsevents_error2'      => 'Invalid goal value: ',
        'jsevents_error3'      => 'No traffic found yet.',
        'jsevents1'            => 'Type of Error',
        'jsevents2'            => 'Error Description',
        'jsevents3'            => 'Error Location',
        'jsevents4'            => '% of all events',
        'jsevents5'            => 'There were no events in the selected interval.',
    ],
    'strings' => [
        'plugin_desc'      => 'Umożliwia śledzenie i raportowanie za pomocą Google Analytics.',
        'notconfigured'    => 'Dostęp do API Google Analytics API jest nieskonfigurowany. Skonfiguruj go w zakładce Ustawienia / Google Analytics',
        'keynotuploaded'   => 'Klucz prywatny Google Analytics API nie został załadowany. Skonfiguruj wtyczkę w zakładce Ustawienia / Google Analytics',
        'tracker'          => 'Tracker Google Analytics',
        'tracking'         => 'Śledzenie',
        'tracker_desc'     => 'Umieszcza kod śledzący na stronie.',
        'settings_desc'    => 'Skonfiguruj API Google Analytics oraz opcja śledzenia.',
        'page_url'         => 'Page URL',
        'pageviews'        => 'Pageviews',
        'current'          => 'Current',
        'goal'             => 'Goal',
        'barchart_label'   => 'Google Analytics custom bar chart',
        'line_label'       => 'Google Analytics custom line chart',
        'piechart_label'   => 'Google Analytics custom pie chart',
    ],
    'settings'    => [
        'project_name'             => 'Nazwa projektu Google API',
        'client_id'                => 'ID klienta Google API',
        'app_email'                => 'Adres e-mail',
        'profile_id'               => 'ID Widoku / Profilu Google Analytics',
        'gapi_key'                 => 'Klucz prywatny',
        'tracking_id'              => 'ID śledzenia',
        'domain_name'              => 'Nazwa domeny',
        'project_name_comment'     => 'Nazwa projektu, wybrana podczas tworzenia go w konsoli Google API',
        'client_id_comment'        => 'ID klienta można znaleźć na stronie projektu w konsoli Google API',
        'app_email_comment'        => 'Adres e-mail wygenerowany przez konsolę Google API',
        'profile_id_comment'       => 'Można go znaleźć w panelu Google Analytics, w ustawieniach widoku.',
        'gapi_key_comment'         => 'Klucz prywatny pobrany z konsoli Google API',
        'tracking_id_comment'      => 'ID śledzenia można znaleźć w ustawieniach Google Analytics',
        'domain_name_comment'      => 'Domena, która będzie śledzona.',
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
