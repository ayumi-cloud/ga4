<?php

declare(strict_types=1);

namespace Google\GA4\ReportWidgets;

use Exception;
use ApplicationException;
use Google\GA4\Classes\Analytics;
use Backend\Classes\ReportWidgetBase;

/**
 * Google Analytics browsers overview widget.
 */
class Browsers extends ReportWidgetBase
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
                'default'           => e(trans('google.ga4::lang.widgets.title_browsers')),
                'type'              => 'string',
                'validationPattern' => '^.+$',
                'validationMessage' => 'backend::lang.dashboard.widget_title_error',
            ],
            'reportHeight' => [
                'title'             => 'google.ga4::lang.widgets.browsers_report_height',
                'default'           => '200',
                'type'              => 'string',
                'validationPattern' => '^[0-9]+$',
                'validationMessage' => 'google.ga4::lang.widgets.browsers_report_height_validation',
            ],
            'legendAsTable' => [
                'title'             => 'google.ga4::lang.widgets.legend_as_table',
                'type'              => 'checkbox',
                'default'           => 1,
            ],
            'days' => [
                'title'             => 'google.ga4::lang.widgets.days',
                'default'           => '7',
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
        $data = $obj->service->data_ga->get($obj->viewId, $days.'daysAgo', 'today', 'ga:visits', ['dimensions'=>'ga:browser', 'sort'=>'-ga:visits']);
        $this->vars['rows'] = $data->getRows();
    }
}
