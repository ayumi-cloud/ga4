<?php 

declare(strict_types=1);

namespace Google\GA4\Models;

use October\Rain\Database\Model;

/**
 * Google Analytics settings model
 *
 */
class Settings extends Model
{
    use \October\Rain\Database\Traits\Validation;

    public $implement = ['System.Behaviors.SettingsModel'];

    public $settingsCode = 'google_ga4_settings';

    public $settingsFields = 'fields.yaml';

    public $attachOne = [
        'gapi_key' => ['System\Models\File', 'public' => false]
    ];

    /**
     * Validation rules
     */
    public $rules = [
        // API Details
        'gapi_key'   => 'required_with:profile_id', //..............update these things with better val rules
        'profile_id' => 'required_with:gapi_key',
        
        // Google analytics measurement id
        'measurement_id'    => [ 'required', 'regex:/(^[a-zA-Z0-9\s\-]+$)+/', 'max:50' ],
        
        // Google ads conversion tracking
        'conversion_id'     => [ 'nullable', 'regex:/(^[a-zA-Z0-9\s\-]+$)+/', 'max:50' ],
        'conversion_label'  => [ 'nullable', 'regex:/(^[a-zA-Z0-9\s\-]+$)+/', 'max:50' ],
        
        // GA Consent option to be added
        
    ];

    /**
     * Default values
     */
    public function initSettingsData()
    {
        //$this->domain_name = 'auto';
        //$this->anonymize_ip = false;
        //$this->force_ssl = false;
    }
}
