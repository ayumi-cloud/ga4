<?php

return [
    'widgets' => [
        'title_browsers'                         => 'Selaimet',
        'description_browsers'                   => 'Tämän raportin avulla näet, kuinka monta eri selainta kävijät käyttävät sivustosi tavoittamiseen.',
        'browsers_report_height'                 => 'Kaavion korkeus',
        'browsers_report_height_validation'      => 'Määritä kaavion korkeus kokonaislukuna.',
        'title_toppages'                         => 'Top-sivut',
        'noresult_toppages'                      => 'Valitussa aikavälissä ei ole sivunäkymiä.',
        'toppages_number'                        => 'Näytettävien sivujen määrä',
        'title_traffic_goal'                     => 'Liikennetavoite',
        'traffic_goal_days'                      => 'Päiviä',
        'traffic_goal_goal'                      => 'Liikennetavoite, käynnit',
        'traffic_goal_goal_description'          => 'Määritä käyntitavoitteen kokonaismäärä määritellyllä ajanjaksolla.',
        'traffic_goal_goal_validation'           => 'Määritä liikennetavoite kokonaislukuna.',
        'title_traffic_overview'                 => 'Liikenteen yleiskatsaus',
        'title_traffic_sources'                  => 'Liikenteen lähteet',
        'description_traffic_sources'            => 'Liikenteen lähteet -raportti näyttää kävijöiden lähteen verkkosivuillesi.',
        'traffic_sources_report_size'            => 'Kaavion säde',
        'traffic_sources_report_size_validation' => 'Määritä kaavion koko kokonaislukuna',
        'traffic_sources_center'                 => 'Keskitä kaavio',
        'traffic_sources_number'                 => 'Näytettävien lähteiden lukumäärä',
        'display_description'                    => 'Näytä raportin kuvaus',
        'days'                                   => 'Päivien lukumäärä',
        'legend_as_table'                        => 'Näytä tekstit taulukona',
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
        'tab'      => 'Google Analytics lisäosa',
        'settings' => 'Asetusten käyttö',
    ],
    'strings'     => [
        'plugin_desc'    => 'Tarjoaa Google Analyticsin seurannan ja raportoinnin.',
        'notconfigured'  => 'Google Analytics API -liittymän käyttöoikeutta ei ole määritetty. Määritä se Asetukset / Google Analytics -sivulla.',
        'keynotuploaded' => 'Google Analytics API yksityinen avain ei ole ladattu. Määritä Google Analytics -liittymän käyttöoikeus Asetukset / Google Analytics -sivulla.',
        'tracker'        => 'Google Analytics seuraaja',
        'tracking'       => 'Seuranta',
        'tracker_desc'   => 'Lisää seurantakoodin sivulle.',
        'settings_desc'  => 'Määritä Google Analytics API koodi ja seurantaominaisuudet.',
        'page_url'       => 'Sivu URL',
        'pageviews'      => 'Sivun katselut',
        'current'        => 'Tämänhetkinen',
        'goal'           => 'Tavoite'
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
];