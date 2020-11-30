<?php 

declare(strict_types=1);

namespace Google\GA4\ReportWidgets;

use Backend\Classes\ReportWidgetBase;

/**
 * Google Analytics custom bar chart
 */
class BarChart extends ReportWidgetBase
{
    use \Bedard\AnalyticsExtension\Traits\DataTrait;

    /**
     * Define widget properties
     * @return  array
     */
    public function defineProperties()
    {
        return [
            'title' => [
                'title'             => 'google.ga4::lang.barchart.widget_title',
                'default'           => 'Bar Chart', //................... lang
                'type'              => 'string',
                'validationPattern' => '^.+$',
                'validationMessage' => 'google.ga4::lang.barchart.widget_title_required'
            ],
            'dimension' => [
                'title'             => 'google.ga4::lang.barchart.dimension',
                'type'              => 'string',
                'validationPattern' => '^ga:[a-zA-Z]+$',
                'validationMessage' => 'google.ga4::lang.barchart.invalid_dimension'
            ],
            'metric' => [
                'title'             => 'google.ga4::lang.barchart.metric',
                'default'           => 'ga:visits',
                'type'              => 'string',
                'validationPattern' => '^ga:[a-zA-Z]+$',
                'validationMessage' => 'google.ga4::lang.barchart.invalid_metric'
            ],
            'reportHeight' => [
                'title'             => 'google.ga4::lang.barchart.chart_height',
                'default'           => '200',
                'type'              => 'string',
                'validationPattern' => '^[0-9]+$',
                'validationMessage' => 'google.ga4::lang.barchart.invalid_chart_height'
            ],
            'legendAsTable' => [
                'title'             => 'google.ga4::lang.barchart.legend_as_table',
                'type'              => 'checkbox',
                'default'           => 1
            ],
            'days' => [
                'title'             => 'google.ga4::lang.barchart.days_to_display',
                'default'           => '30',
                'type'              => 'string',
                'validationPattern' => '^[0-9]+$'
            ],
            'number' => [
                'title'             => 'google.ga4::lang.barchart.results_to_display',
                'default'           => '10',
                'type'              => 'string',
                'validationPattern' => '^[0-9]+$',
                'description'       => 'google.ga4::lang.barchart.zero_displays_all'
            ],
            'description' => [
                'title'             => ''
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

        $this->vars['total'] = $data->getTotalsForAllResults()[$this->property('metric')];
    }

}