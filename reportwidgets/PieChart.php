<?php 

declare(strict_types=1);

namespace Google\GA4\ReportWidgets;

use Backend\Classes\ReportWidgetBase;

/**
 * Google Analytics custom pie chart
 */
class PieChart extends ReportWidgetBase
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
                'title'             => 'google.ga4::lang.piechart.widget_title',
                'default'           => 'Pie Chart', //................... lang
                'type'              => 'string',
                'validationPattern' => '^.+$',
                'validationMessage' => 'google.ga4::lang.piechart.title_required'
            ],
            'dimension' => [
                'title'             => 'google.ga4::lang.piechart.dimension',
                'type'              => 'string',
                'validationPattern' => '^ga:[a-zA-Z]+$',
                'validationMessage' => 'google.ga4::lang.piechart.invalid_dimension'
            ],
            'metric' => [
                'title'             => 'google.ga4::lang.piechart.metric',
                'default'           => 'ga:visits',
                'type'              => 'string',
                'validationPattern' => '^ga:[a-zA-Z]+$',
                'validationMessage' => 'google.ga4::lang.piechart.invalid_metric'
            ],
            'reportSize' => [
                'title'             => 'google.ga4::lang.piechart.chart_radius',
                'default'           => '150',
                'type'              => 'string',
                'validationPattern' => '^[0-9]+$',
                'validationMessage' => 'google.ga4::lang.piechart.chart_size_invalid'
            ],
            'center' => [
                'title'             => 'google.ga4::lang.piechart.center_chart',
                'type'              => 'checkbox'
            ],
            'legendAsTable' => [
                'title'             => 'google.ga4::lang.piechart.legend_as_table',
                'type'              => 'checkbox',
                'default'           => 1
            ],
            'displayTotal' => [
                'title'             => 'google.ga4::lang.piechart.display_total',
                'type'              => 'checkbox',
                'default'           => 1
            ],
            'days' => [
                'title'             => 'google.ga4::lang.piechart.days_to_display',
                'default'           => '30',
                'type'              => 'string',
                'validationPattern' => '^[0-9]+$'
            ],
            'number' => [
                'title'             => 'google.ga4::lang.piechart.results_to_display',
                'default'           => '10',
                'type'              => 'string',
                'validationPattern' => '^[0-9]+$',
                'description'       => 'google.ga4::lang.piechart.zero_displays_all'
            ],
            'description' => [
                'title'             => 'google.ga4::lang.piechart.report_description'
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