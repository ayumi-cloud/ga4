<?php

declare(strict_types=1);

namespace Google\GA4\ReportWidgets;

use Exception;
use ApplicationException;
use Google\GA4\Classes\Analytics;
use Backend\Classes\ReportWidgetBase;

/**
 * Google Analytics traffic goal widget.
 */
class TrafficGoal extends ReportWidgetBase
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
                'default'           => e(trans('google.ga4::lang.widgets.title_traffic_goal')),
                'type'              => 'string',
                'validationPattern' => '^.+$',
                'validationMessage' => 'backend::lang.dashboard.widget_title_error',
            ],
            'days' => [
                'title'             => 'google.ga4::lang.widgets.traffic_goal_days',
                'default'           => '7',
                'type'              => 'string',
                'validationPattern' => '^[0-9]+$',
            ],
            'goal' => [
                'title'             => 'google.ga4::lang.widgets.traffic_goal_goal',
                'description'       => 'google.ga4::lang.widgets.traffic_goal_goal_description',
                'default'           => '100',
                'type'              => 'string',
                'validationPattern' => '^[0-9]+$',
                'validationMessage' => 'google.ga4::lang.widgets.traffic_goal_goal_validation',
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
        $goal = $this->property('goal');
        if (! $goal) {
            throw new ApplicationException(e(trans('google.ga4::lang.widgets.jsevents_error2')).$goal);
        }
        $obj = Analytics::instance();
        $data = $obj->service->data_ga->get(
            $obj->viewId,
            $days.'daysAgo',
            'today',
            'ga:visits'
        )->getRows();

        $total = $this->vars['total'] = isset($data[0][0]) ? $data[0][0] : 0;
        $this->vars['percentage'] = min(round($total/$goal*100), 100);
    }
}
