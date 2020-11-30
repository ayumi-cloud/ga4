<?php 

declare(strict_types=1);

namespace Google\GA4\ReportWidgets;

use Backend\Classes\ReportWidgetBase;
use Google\GA4\Classes\Analytics;
use ApplicationException;
use Exception;

/**
 *  Google Analytics Javascript Error Events Widget
 *  This widget can show any events from GA, You can filter it by event category.
 */
class JsEvents extends ReportWidgetBase
{

    /**
     * filter for GA request
     * @var string
     */
    protected $filter = '';

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
                'title'             => 'google.ga4::lang.widgets.jsevents_name',
                'default'           => e(trans('google.ga4::lang.widgets.jsevents_title')),
                'type'              => 'string',
                'validationPattern' => '^.+$',
                'validationMessage' => 'google.ga4::lang.widgets.jsevents_valname',
            ],
            'category' => [
                'title'             => 'google.ga4::lang.widgets.jsevents_catname',
                'default'           => e(trans('google.ga4::lang.widgets.jsevents_category')),
                'type'              => 'string',
                'validationPattern' => '^.+$',
                'validationMessage' => 'google.ga4::lang.widgets.jsevents_valcat',
            ],
            'days' => [
                'title'             => 'google.ga4::lang.widgets.jsevents_daystitle',
                'default'           => '30',
                'type'              => 'string',
                'validationPattern' => '^[0-9]+$'
            ],
            'number' => [
                'title'             => 'google.ga4::lang.widgets.jsevents_numbertitle',
                'default'           => '10',
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
        if (!$days){
            throw new ApplicationException(e(trans('google.ga4::lang.widgets.jsevents_error')).$days);
        }

        $this->createFilter();

        $obj = Analytics::instance();
        $data = $obj->service->data_ga->get(
                                    $obj->viewId,
                                    $days.'daysAgo',
                                    'today',
                                    'ga:totalEvents',
                                        [
                                            'dimensions' => 'ga:eventCategory, ga:eventAction, ga:eventLabel',
                                            'sort' => '-ga:totalEvents',
                                            'filters' => $this->filter,
                                            'max-results' => $this->property('number', 10)
                                        ]
                                    );

        $rows = $data->getRows() ?: [];
        $this->vars['rows'] = $rows;

        $total = 0;
        foreach ($rows as $row)
            $total += $row[3];

        $this->vars['total'] = $total;
    }
	
    /**
     * Create filter string (see docs https://developers.google.com/analytics/devguides/reporting/core/v4)
     * You can extend this function
     */
    public function createFilter()
    {
        $categories = explode(',', $this->property('category', e(trans('google.ga4::lang.widgets.jsevents_category'))));
        foreach ($categories as $key => $category) {
            if (!empty($category)) {
                $categories[$key] = 'ga:eventCategory=='.rawurlencode(trim($category));
            }else{
                unset($categories[$key]); // If user sets empty category by typing two comma together, or last char comma
            }
        }
        $this->filter = implode(',', $categories);
    }
}
