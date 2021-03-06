<?php

declare(strict_types=1);

namespace Google\GA4\Classes;

use App;
use Google_Client;
use ApplicationException;
use Google_Service_Analytics;
use Google\GA4\Models\Settings;

class Analytics
{
    use \October\Rain\Support\Traits\Singleton;

    /**
     * @var Google_Client Google API client
     */
    public $client;

    /**
     * @var Google_Service_Analytics Google API analytics service
     */
    public $service;

    /**
     * @var string Google Analytics View ID
     */
    public $viewId;

    protected function init()
    {
        $settings = Settings::instance();
        if (! strlen($settings->profile_id)) {
            throw new ApplicationException(e(trans('rainlab.googleanalytics::lang.strings.notconfigured')));
        }

        if (! $settings->gapi_key) {
            throw new ApplicationException(e(trans('rainlab.googleanalytics::lang.strings.keynotuploaded')));
        }

        $client = new Google_Client();

        /*
         * Set caching
         */
        $cache = App::make(CacheItemPool::class);
        $client->setCache($cache);

        /*
         * Set assertion credentials
         */
        $auth = json_decode($settings->gapi_key->getContents(), true);
        $client->setAuthConfig($auth);
        $client->addScope(Google_Service_Analytics::ANALYTICS_READONLY);

        if ($client->isAccessTokenExpired()) {
            $client->refreshTokenWithAssertion();
        }

        $this->client = $client;
        $this->service = new Google_Service_Analytics($client);
        $this->viewId = 'ga:'.$settings->profile_id;
    }
}
