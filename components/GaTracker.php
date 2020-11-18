<?php 

declare(strict_types=1);

namespace Google\GA4\Components;

use Cms\Classes\ComponentBase;
use RainLab\GoogleAnalytics\Models\Settings;

class GaTracker extends ComponentBase
{
    /**
     * Component Details.
     */	
    public function componentDetails()
    {
        return [
            'name'        => 'google.ga4::lang.strings.tracker',
            'description' => 'google.ga4::lang.strings.tracker_desc'
        ];
    }

    /**
     * Measurement ID Details.
     */	
    public function measurementId()
    {
        return Settings::get('measurement_id');
    }
}
