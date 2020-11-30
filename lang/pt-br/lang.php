<?php

return [
    'widgets' => [
        'title_browsers'                         => 'Navegadores',
        'description_browsers'                   => 'Este relatório permite ver o número de visitas de diferentes navegadores que as pessoas usam para acessar seu site.',
        'browsers_report_height'                 => 'Altura do gráfico',
        'browsers_report_height_validation'      => 'Especifique a altura do gráfico como um valor inteiro.',
        'title_toppages'                         => 'Páginas principais',
        'noresult_toppages'                      => 'Não houve visualizações de página no intervalo selecionado.',
        'toppages_number'                        => 'Número de páginas para exibir',
        'title_traffic_goal'                     => 'Meta de tráfego',
        'traffic_goal_days'                      => 'Período',
        'traffic_goal_goal'                      => 'Meta de tráfego, visitas',
        'traffic_goal_goal_description'          => 'Especifique o número total de visitas desejadas pelo período definido com o parâmetro Período',
        'traffic_goal_goal_validation'           => 'Especifique a meta de tráfego como um valor inteiro.',
        'title_traffic_overview'                 => 'Visão geral do tráfego',
        'title_traffic_sources'                  => 'Fontes de tráfego',
        'description_traffic_sources'            => 'O relatório de fontes de tráfego exibe a fonte de referências para seu site.',
        'traffic_sources_report_size'            => 'Raio do gráfico',
        'traffic_sources_report_size_validation' => 'Especifique o tamanho do gráfico como um valor inteiro',
        'traffic_sources_center'                 => 'Centralizar o gráfico',
        'traffic_sources_number'                 => 'Número de fontes a serem exibidas',
        'display_description'                    => 'Exibir a descrição do relatório',
        'days'                                   => 'Número de dias para exibir dados para',
        'legend_as_table'                        => 'Exibir legenda como uma tabela',
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
        'tab'      => 'Google Analytics Plugin',
        'settings' => 'Acesso às configurações',
    ],
    'strings'     => [
        'plugin_desc'      => 'Fornece o acompanhamento e os relatórios do Google Analytics.',
        'notconfigured'    => 'O acesso à API do Google Analytics não está configurado. Configure-o no System / Settings / Google Analytics page.',
        'keynotuploaded'   => 'A chave privada da API do Google Analytics não está carregada. Configure o acesso do Google Analytics no System / Settings / Google Analytics page.',
        'tracker'          => 'Rastreador do Google Analytics',
        'tracking'         => 'Rastreamento',
        'tracker_desc'     => 'Gera um código de rastreamento em uma página.',
        'settings_desc'    => 'Configure o código da API do Google Analytics e as opções de rastreamento.',
        'page_url'         => 'URL da página',
        'pageviews'        => 'Visualizações de página',
        'current'          => 'Atual',
        'goal'             => 'Meta',
        'barchart_label'   => 'Google Analytics custom bar chart',
        'line_label'       => 'Google Analytics custom line chart',
        'piechart_label'   => 'Google Analytics custom pie chart',
    ],
    'settings'    => [
        'project_name'             => 'Nome do projeto da API do Google',
        'client_id'                => 'ID do cliente da API do Google',
        'app_email'                => 'Endereço de email',
        'profile_id'               => 'Número de ID de View/Profile do Google Analytics',
        'gapi_key'                 => 'Chave privada',
        'tracking_id'              => 'ID de rastreamento',
        'domain_name'              => 'Nome do domínio',
        'project_name_comment'     => 'O nome atribuído ao projeto quando criado no Google API Console',
        'client_id_comment'        => 'Você pode encontrar o ID do cliente na página do projeto no Console da API do Google',
        'app_email_comment'        => 'O endereço de e-mail gerado pelo Google API Console',
        'profile_id_comment'       => 'Você pode encontrá-lo na página Admin / View Settings do Google Analytics',
        'gapi_key_comment'         => 'O arquivo de chave privada que você baixou do Google API Console',
        'tracking_id_comment'      => 'Você pode encontrar o Tracking ID no Admin / Property Settings page',
        'domain_name_comment'      => 'Especifique o nome de domínio que você vai acompanhar',
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
    'errors' => [
        'invalid_days'      => 'Invalid days value: ',
        'invalid_dimension' => 'Invalid dimension value: ',
        'invalid_metric'    => 'Invalid metric value: ',
    ]
];
