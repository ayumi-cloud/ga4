<?php 

declare(strict_types=1);

namespace Google\GA4\ReportWidgets;

use Backend\Classes\ReportWidgetBase;
use Google\GA4\Classes\Analytics;
use ApplicationException;
use Exception;

/**
 * Google Analytics top pages widget.
 */
class TopPages extends ReportWidgetBase
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
                'default'           => e(trans('google.ga4::lang.widgets.title_toppages')),
                'type'              => 'string',
                'validationPattern' => '^.+$',
                'validationMessage' => 'backend::lang.dashboard.widget_title_error'
            ],
            'days' => [
                'title'             => 'google.ga4::lang.widgets.days',
                'default'           => '7',
                'type'              => 'string',
                'validationPattern' => '^[0-9]+$'
            ],
            'number' => [
                'title'             => 'google.ga4::lang.widgets.toppages_number',
                'default'           => '5',
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
        $days = $this->property('days');
        if (!$days)
            throw new ApplicationException(e(trans('google.ga4::lang.widgets.jsevents_error')).$days);

        $obj = Analytics::instance();
        $data = $obj->service->data_ga->get($obj->viewId, $days.'daysAgo', 'today', 'ga:pageviews', ['dimensions' => 'ga:pagePath', 'sort' => '-ga:pageviews']);

        $rows = $data->getRows() ?: [];
        $rows = $this->vars['rows'] = array_slice($rows, 0, $this->property('number'));

        $total = 0;
        foreach ($rows as $row)
            $total += $row[1];

        $this->vars['total'] = $total;
    }
}
