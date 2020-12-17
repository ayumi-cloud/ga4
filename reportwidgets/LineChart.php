<?php

declare(strict_types=1);

namespace Google\GA4\ReportWidgets;

use Backend\Classes\ReportWidgetBase;

/**
 * Google Analytics custom line chart
 */
class LineChart extends ReportWidgetBase
{
    use \Google\GA4\Traits\DataTrait;

    /**
     * Define widget properties
     *
     * @return  array
     */
    public function defineProperties()
    {
        return [
            'title' => [
                'title'             => 'google.ga4::lang.line.widget_title',
                'default'           => e(trans('google.ga4::lang.line.line_chart')),
                'type'              => 'string',
                'validationPattern' => '^.+$',
                'validationMessage' => 'google.ga4::lang.line.title_required',
            ],
            'dimension' => [
                'title'             => 'google.ga4::lang.line.dimension',
                'type'              => 'string',
                'validationPattern' => '^ga:[a-zA-Z]+$',
                'validationMessage' => 'google.ga4::lang.line.invalid_dimension',
            ],
            'metric' => [
                'title'             => 'google.ga4::lang.line.metric',
                'default'           => 'ga:visits',
                'type'              => 'string',
                'validationPattern' => '^ga:[a-zA-Z]+$',
                'validationMessage' => 'google.ga4::lang.line.invalid_metric',
            ],
            'dimensionLabel' => [
                'title'             => 'google.ga4::lang.line.dimension_label',
                'type'              => 'string',
            ],
            'metricLabel' => [
                'title'             => 'google.ga4::lang.line.metric_label',
                'type'              => 'string',
                'default'           => 'Visits',
            ],
            'days' => [
                'title'             => 'google.ga4::lang.line.days_to_display',
                'default'           => '30',
                'type'              => 'string',
                'validationPattern' => '^[0-9]+$',
            ],
            'number' => [
                'title'             => 'google.ga4::lang.line.results_to_display',
                'default'           => '10',
                'type'              => 'string',
                'validationPattern' => '^[0-9]+$',
                'description'       => 'google.ga4::lang.line.zero_displays_all',
            ],
        ];
    }

    /**
     * Render the widget data
     */
    protected function renderData()
    {
        $data = $this->loadData();

        $rows = $data->getRows() ?: [];
        $number = $this->property('number') ?: 0;
        $this->vars['rows'] = $number > 0
            ? array_slice($rows, 0, $number)
            : $data->getRows();

        $total = 0;
        foreach ($rows as $row) {
            $total += $row[1];
        }

        $this->vars['total'] = $total;
    }
}
