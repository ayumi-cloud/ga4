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
            'iconSvg'     => 'plugins/google/ga4/assets/images/logo.svg',
            'homepage'    => 'https://developers.google.com/analytics',
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
                'label' => 'google.ga4::lang.permissions.settings',
            ],
            'google.ga4.view_widgets' => [
                'tab'   => 'google.ga4::lang.permissions.tab',
                'label' => 'google.ga4::lang.permissions.widgets',
            ],
        ];
    }

    public function registerReportWidgets()
    {
        return [
            'Google\GA4\ReportWidgets\TrafficOverview' => [
                'label'       => 'google.ga4::lang.report_widgets.trafficOverview',
                'context'     => 'dashboard',
                'permissions' => ['google.ga4.view_widgets'],
            ],
            'Google\GA4\ReportWidgets\TrafficSources' => [
                'label'       => 'google.ga4::lang.report_widgets.trafficSources',
                'context'     => 'dashboard',
                'permissions' => ['google.ga4.view_widgets'],
            ],
            'Google\GA4\ReportWidgets\Browsers' => [
                'label'       => 'google.ga4::lang.report_widgets.browsers',
                'context'     => 'dashboard',
                'permissions' => ['google.ga4.view_widgets'],
            ],
            'Google\GA4\ReportWidgets\TrafficGoal' => [
                'label'       => 'google.ga4::lang.report_widgets.trafficGoal',
                'context'     => 'dashboard',
                'permissions' => ['google.ga4.view_widgets'],
            ],
            'Google\GA4\ReportWidgets\TopPages' => [
                'label'       => 'google.ga4::lang.report_widgets.topPages',
                'context'     => 'dashboard',
                'permissions' => ['google.ga4.view_widgets'],
            ],
            'Google\GA4\ReportWidgets\JsEvents' => [
                'label'       => 'google.ga4::lang.report_widgets.jsEvents',
                'context'     => 'dashboard',
                'permissions' => ['google.ga4.view_widgets'],
            ],
            'Google\GA4\ReportWidgets\BarChart' => [
                'label'       => 'google.ga4::lang.strings.barchart_label',
                'context'     => 'dashboard',
                'permissions' => ['google.ga4.view_widgets'],
            ],
            'Google\GA4\ReportWidgets\LineChart' => [
                'label'       => 'google.ga4::lang.strings.line_label',
                'context'     => 'dashboard',
                'permissions' => ['google.ga4.view_widgets'],
            ],
            'Google\GA4\ReportWidgets\PieChart' => [
                'label'       => 'google.ga4::lang.strings.piechart_label',
                'context'     => 'dashboard',
                'permissions' => ['google.ga4.view_widgets'],
            ],
        ];
    }

    public function registerSettings()
    {
        return [
            'config' => [
                'label'       => 'google.ga4::lang.config.label',
                'icon'        => 'icon-bar-chart-o',
                'iconSvg'     => 'plugins/google/ga4/assets/images/logo.svg',
                'description' => 'google.ga4::lang.strings.settings_desc',
                'class'       => 'Google\GA4\Models\Settings',
                'permissions' => ['google.ga4.access_settings'],
                'order'       => 600,
            ],
        ];
    }

    public function boot()
    {
        set_include_path(get_include_path() . PATH_SEPARATOR . __DIR__.'/vendor/google/apiclient/src');
    }
}
