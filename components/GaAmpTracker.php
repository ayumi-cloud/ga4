<?php

declare(strict_types=1);

namespace Google\GA4\Components;

use Cms\Classes\ComponentBase;
use Google\GA4\Models\Settings;

class GaAmpTracker extends ComponentBase
{
    /**
     * Component Details.
     */
    public function componentDetails()
    {
        return [
            'name'        => 'google.ga4::lang.strings.tracker',
            'description' => 'google.ga4::lang.strings.tracker_desc',
        ];
    }

    /**
     * Measurement ID Details.
     */
    public function measurementId()
    {
        return Settings::get('measurement_id');
    }

    /**
     * Conversion ID Details.
     */
    public function conversionId()
    {
        return Settings::get('conversion_id');
    }
    
    // consent data, see github issue: https://github.com/ayumi-cloud/ga4/issues/6
}
