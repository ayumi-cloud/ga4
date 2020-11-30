<?php 

declare(strict_types=1);

namespace Google\GA4\ReportWidgets;

use Backend\Classes\ReportWidgetBase;
use Google\GA4\Classes\Analytics;
use ApplicationException;
use Exception;

/**
 * Google Analytics traffic overview widget.
 */
class TrafficOverview extends ReportWidgetBase
{
    /**
     * Renders the widget.
     */
    public function render()
    {
        try {
            $this->loadData();
        }
        catch (Exception $ex) {
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
                'default'           => e(trans('google.ga4::lang.widgets.title_traffic_overview')),
                'type'              => 'string',
                'validationPattern' => '^.+$',
                'validationMessage' => 'backend::lang.dashboard.widget_title_error'
            ],
            'days' => [
                'title'             => 'google.ga4::lang.widgets.days',
                'default'           => '30',
                'type'              => 'string',
                'validationPattern' => '^[0-9]+$'
            ]
        ];
    }

    /**
     * Load GA4 API data.
     */
    protected function loadData()
    {
        $obj = Analytics::instance();

        $days = $this->property('days');
        if (!$days) {
            throw new ApplicationException(e(trans('google.ga4::lang.widgets.jsevents_error')).$days);
        }

        $data = $obj->service->data_ga->get(
            $obj->viewId,
            $days.'daysAgo',
            'today',
            'ga:visits',
            ['dimensions' => 'ga:date']
        );

        $rows = $data->getRows();
        if (!$rows) {
            throw new ApplicationException(e(trans('google.ga4::lang.widgets.jsevents_error3')));
        }

        $points = [];
        foreach ($rows as $row) {
            $point = [
                strtotime($row[0])*1000,
                $row[1]
            ];

            $points[] = $point;
        }

        $this->vars['rows'] = str_replace('"', '', substr(substr(json_encode($points), 1), 0, -1));
    }
}
