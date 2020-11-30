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
     * @return  array
     */
    public function defineProperties()
    {
        return [
            'title' => [
                'title'             => 'bedard.analyticsextension::lang.line.widget_title',
                'default'           => 'Line Chart',
                'type'              => 'string',
                'validationPattern' => '^.+$',
                'validationMessage' => 'bedard.analyticsextension::lang.line.title_required'
            ],
            'dimension' => [
                'title'             => 'bedard.analyticsextension::lang.line.dimension',
                'type'              => 'string',
                'validationPattern' => '^ga:[a-zA-Z]+$',
                'validationMessage' => 'bedard.analyticsextension::lang.line.invalid_dimension'
            ],
            'metric' => [
                'title'             => 'bedard.analyticsextension::lang.line.metric',
                'default'           => 'ga:visits',
                'type'              => 'string',
                'validationPattern' => '^ga:[a-zA-Z]+$',
                'validationMessage' => 'bedard.analyticsextension::lang.line.invalid_metric'
            ],
            'dimensionLabel' => [
                'title'             => 'bedard.analyticsextension::lang.line.dimension_label',
                'type'              => 'string'
            ],
            'metricLabel' => [
                'title'             => 'bedard.analyticsextension::lang.line.metric_label',
                'type'              => 'string',
                'default'           => 'Visits'
            ],
            'days' => [
                'title'             => 'bedard.analyticsextension::lang.line.days_to_display',
                'default'           => '30',
                'type'              => 'string',
                'validationPattern' => '^[0-9]+$'
            ],
            'number' => [
                'title'             => 'bedard.analyticsextension::lang.line.results_to_display',
                'default'           => '10',
                'type'              => 'string',
                'validationPattern' => '^[0-9]+$',
                'description'       => 'bedard.analyticsextension::lang.line.zero_displays_all'
            ]
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
        foreach ($rows as $row)
            $total += $row[1];

        $this->vars['total'] = $total;
    }
}