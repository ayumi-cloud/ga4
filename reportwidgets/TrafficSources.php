<?php

declare(strict_types=1);

namespace Google\GA4\ReportWidgets;

use Exception;
use ApplicationException;
use Google\GA4\Classes\Analytics;
use Backend\Classes\ReportWidgetBase;

/**
 * Google Analytics traffic sources widget.
 */
class TrafficSources extends ReportWidgetBase
{
    /**
     * Renders the widget.
     */
    public function render()
    {
        try {
            $this->loadData();
        } catch (Exception $ex) {
            $this->vars['error'] = $ex->getMessage();
        }

        return $this->makePartial('widget');
    }

    /**
     * Widget configuration.
     */
    public function defineProperties()
    {
        return [
            'title' => [
                'title'             => 'backend::lang.dashboard.widget_title_label',
                'default'           => e(trans('google.ga4::lang.widgets.title_traffic_sources')),
                'type'              => 'string',
                'validationPattern' => '^.+$',
                'validationMessage' => 'backend::lang.dashboard.widget_title_error',
            ],
            'reportSize' => [
                'title'             => 'google.ga4::lang.widgets.traffic_sources_report_size',
                'default'           => '150',
                'type'              => 'string',
                'validationPattern' => '^[0-9]+$',
                'validationMessage' => 'google.ga4::lang.widgets.traffic_sources_report_size_validation',
            ],
            'center' => [
                'title'             => 'google.ga4::lang.widgets.traffic_sources_center',
                'type'              => 'checkbox',
            ],
            'legendAsTable' => [
                'title'             => 'google.ga4::lang.widgets.legend_as_table',
                'type'              => 'checkbox',
                'default'           => 1,
            ],
            'days' => [
                'title'             => 'google.ga4::lang.widgets.days',
                'default'           => '30',
                'type'              => 'string',
                'validationPattern' => '^[0-9]+$',
            ],
            'number' => [
                'title'             => 'google.ga4::lang.widgets.traffic_sources_number',
                'default'           => '10',
                'type'              => 'string',
                'validationPattern' => '^[0-9]+$',
            ],
            'displayDescription' => [
                'title'             => 'google.ga4::lang.widgets.display_description',
                'type'              => 'checkbox',
                'default'           => 1,
            ],
        ];
    }

    /**
     * Load GA4 API data.
     */
    protected function loadData()
    {
        $days = $this->property('days');
        if (! $days) {
            throw new ApplicationException(e(trans('google.ga4::lang.widgets.jsevents_error')).$days);
        }
        $obj = Analytics::instance();
        $data = $obj->service->data_ga->get(
            $obj->viewId,
            $days.'daysAgo',
            'today',
            'ga:visits',
            ['dimensions' => 'ga:source', 'sort' => '-ga:visits']
        );

        $rows = $data->getRows() ?: [];

        $this->vars['rows'] = array_slice($rows, 0, $this->property('number'));
        $this->vars['total'] = $data->getTotalsForAllResults()['ga:visits'];
    }
}
