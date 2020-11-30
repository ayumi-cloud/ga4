<?php

return [
    'widgets' => [
        'title_browsers'                         => 'Tarayıcılar',
        'description_browsers'                   => 'Bu rapor, kişilerin sitenize ulaşmak için kullandıkları farklı tarayıcılardan gelen ziyaret sayısını görmenizi sağlar.',
        'browsers_report_height'                 => 'Grafik yüksekliği',
        'browsers_report_height_validation'      => 'Lütfen grafik yüksekliğini sayısal değer olarak belirtin.',
        'title_toppages'                         => 'En İyi Sayfalar',
        'noresult_toppages'                      => 'Seçilen aralıkta sayfa görüntüleme yoktur.',
        'toppages_number'                        => 'Gösterilecek sayfa sayısı',
        'title_traffic_goal'                     => 'Trafik Hedefi',
        'traffic_goal_days'                      => 'Dönem',
        'traffic_goal_goal'                      => 'Trafik hedefi, ziyaretler',
        'traffic_goal_goal_description'          => 'Dönem parametresiyle tanımlanan her bir dönem için istenilen ziyaret sayısını belirtin',
        'traffic_goal_goal_validation'           => 'Lütfen trafik hedefini sayısal bir değer olarak belirtin.',
        'title_traffic_overview'                 => 'Trafiğe Genel Bakış',
        'title_traffic_sources'                  => 'Trafik Kaynakları',
        'description_traffic_sources'            => 'Trafik kaynakları raporu, web sitenize yönlendirmelerin kaynağını görüntüler.',
        'traffic_sources_report_size'            => 'Grafik yarıçapı',
        'traffic_sources_report_size_validation' => 'Lütfen grafik boyutunu tam sayı olarak belirtin',
        'traffic_sources_center'                 => 'Grafiği ortala',
        'traffic_sources_number'                 => 'Gösterilecek kaynak sayısı',
        'display_description'                    => 'Rapor açıklamasını göster',
        'days'                                   => 'Gösterilecek veriler için gün sayısı',
        'legend_as_table'                        => 'Göstergeyi tablo olarak görüntüle',
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
        'tab'      => 'Google Analytics Eklentisi',
        'settings' => 'Ayarlara erişim',
    ],
    'strings'     => [
        'plugin_desc'      => 'Google Analytics izleme ve raporlamasını sağlar.',
        'notconfigured'    => 'Google Analytics API erişimi yapılandırılmadı. Lütfen Sistem / Ayarlar / Google Analytics sayfasından yapılandırın.',
        'keynotuploaded'   => 'Google Analytics API özel anahtarı yüklenmedi. Lütfen Sistem / Ayarlar / Google Analytics sayfasındaki Google Analytics erişimini yapılandırın.',
        'tracker'          => 'Google Analytics takipçisi',
        'tracking'         => 'Takipçi',
        'tracker_desc'     => 'Sayfaya bir izleme kodu ekler.',
        'settings_desc'    => 'Google Analytics API kodunu ve izleme seçeneklerini yapılandırın.',
        'page_url'         => 'Sayfa URL\'si',
        'pageviews'        => 'Sayfa Görüntüleme',
        'current'          => 'Aktif',
        'goal'             => 'Hedef',
        'barchart_label'   => 'Google Analytics custom bar chart',
        'line_label'       => 'Google Analytics custom line chart',
        'piechart_label'   => 'Google Analytics custom pie chart',
    ],
    'settings'    => [
        'project_name'             => 'Google API Proje adı',
        'client_id'                => 'Google API Client ID',
        'app_email'                => 'Email Adresi',
        'profile_id'               => 'Analytics View/Profile ID number',
        'gapi_key'                 => 'Özel anahtar (Private key)',
        'tracking_id'              => 'İzleme kimliği (Tracking ID)',
        'anonymize_ip'             => 'IP\'yi Anonimleştir',
        'domain_name'              => 'Alan adı (Domain)',
        'project_name_comment'     => 'Google API Konsolu\'nda oluşturulduğunda projeye verdiğiniz isim',
        'client_id_comment'        => 'Müşteri kimliğini Google API Konsolunda proje sayfasında bulabilirsiniz.',
        'app_email_comment'        => 'Google API Konsolu tarafından oluşturulan e-posta adresi',
        'profile_id_comment'       => 'Bunu Google Analytics Yönetici / Görünüm Ayarları sayfasında bulabilirsiniz.',
        'gapi_key_comment'         => 'Google API Konsolundan indirdiğiniz özel anahtar dosyası',
        'tracking_id_comment'      => 'İzleme Kimliğini Yönetici / Mülkiyet Ayarları sayfasında bulabilirsiniz.',
        'anonymize_ip_comment'     => 'Ziyaretçiler için IP anonimliğini etkinleştir',
        'domain_name_comment'      => 'İzleyeceğiniz alan adını belirtin',
        'force_ssl'                => 'SSL Zorla',
        'force_ssl_comment'        => 'Google\'a veri gönderirken her zaman SSL kullan',
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
