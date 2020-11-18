<?php 

declare(strict_types=1);

namespace Google\GA4;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function pluginDetails()
    {
        return [
            'name'        => 'GA4',
            'description' => 'google.ga4::lang.strings.plugin_desc',
            'icon'        => 'icon-bar-chart-o',
            'homepage'    => 'https://developers.google.com/analytics'
        ];
    }

    public function registerComponents()
    {
        return [
            '\Google\GA4\Components\GaTracker'    => 'gaTracker',
            '\Google\GA4\Components\GaAmpTracker' => 'gaAmpTracker',
        ];
    }

    public function registerPermissions()
    {
        return [
            'google.ga4.access_settings' => [
                'tab'   => 'google.ga4::lang.permissions.tab',
                'label' => 'google.ga4::lang.permissions.settings'
            ],
            'google.ga4.view_widgets' => [
                'tab'   => 'google.ga4::lang.permissions.tab',
                'label' => 'google.ga4::lang.permissions.widgets'
            ]
        ];
    }

    public function registerReportWidgets()
    {
        return [
            'Google\GA4\ReportWidgets\TrafficOverview' => [
                'label'       => 'Google Analytics Traffic Overview',
                'context'     => 'dashboard',
                'permissions' => ['google.ga4.view_widgets']
            ],
            'Google\GA4\ReportWidgets\TrafficSources' => [
                'label'       => 'Google Analytics Traffic Sources',
                'context'     => 'dashboard',
                'permissions' => ['google.ga4.view_widgets']
            ],
            'Google\GA4\ReportWidgets\Browsers' => [
                'label'       => 'Google Analytics Browsers',
                'context'     => 'dashboard',
                'permissions' => ['google.ga4.view_widgets']
            ],
            'Google\GA4\ReportWidgets\TrafficGoal' => [
                'label'       => 'Google Analytics Traffic Goal',
                'context'     => 'dashboard',
                'permissions' => ['google.ga4.view_widgets']
            ],
            'Google\GA4\ReportWidgets\TopPages' => [
                'label'       => 'Google Analytics Top Pages',
                'context'     => 'dashboard',
                'permissions' => ['google.ga4.view_widgets']
            ]
        ];
    }

    public function registerSettings()
    {
        return [
            'config' => [
                'label'       => 'Google Analytics 4',
                'icon'        => 'icon-bar-chart-o',
                'description' => 'google.ga4::lang.strings.settings_desc',
                'class'       => 'Google\GA4\Models\Settings',
                'permissions' => ['google.ga4.access_settings'],
                'order'       => 600
            ]
        ];
    }

    public function boot()
    {
        set_include_path(get_include_path() . PATH_SEPARATOR . __DIR__.'/vendor/google/apiclient/src');
    }
}
