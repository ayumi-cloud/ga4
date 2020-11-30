<?php 

declare(strict_types=1);

namespace AsianSpa\MainWebPages\ReportWidgets;

use Backend\Classes\ReportWidgetBase;
use RainLab\GoogleAnalytics\Classes\Analytics;
use ApplicationException;
use Exception;

/**
 *  Google Analytics Javascript Error Events Widget
 *  This widget can show any events from GA, You can filter it by event category.
 *  @author Asian Spa
 */
class GoogleAnalyticsJsEvents extends ReportWidgetBase
{

    /**
     * filter for GA request
     * @var string
     */
    protected $filter = '';

    public function defineProperties()
    {
        return [
            'title' => [
                'title'             => 'Widget title',
                'default'           => 'Javascript and Ajax Error Checking',
                'type'              => 'string',
                'validationPattern' => '^.+$',
                'validationMessage' => 'The Widget Title is required.'
            ],
            'category' => [
                'title'             => 'Category filter',
                'default'           => 'JavaScript Error, jQuery Error, jQuery Ajax Error',
                'type'              => 'string',
                'validationPattern' => '^.+$',
                'validationMessage' => 'The category is required.'
            ],
            'days' => [
                'title'             => 'Number of days to display data for',
                'default'           => '30',
                'type'              => 'string',
                'validationPattern' => '^[0-9]+$'
            ],
            'number' => [
                'title'             => 'Number of items to display',
                'default'           => '10',
                'type'              => 'string',
                'validationPattern' => '^[0-9]+$'
            ]
        ];
    }


    public function render()
    {
        try {
            $this->loadData();
        }
        catch (Exception $ex) {
            $this->vars['error'] = $ex->getMessage();
        }

        return $this->makePartial('googleanalyticsjsevents');
    }


    protected function loadData()
    {
        $days = $this->property('days');
        if (!$days){
            throw new ApplicationException('Invalid days value: '.$days);
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
     * Create filter string (see docs https://developers.google.com/analytics/devguides/reporting/core/v3/reference#filters)
     * You can extend this function
     */
    public function createFilter()
    {
        $categories = explode(',', $this->property('category', 'JavaScript Error, jQuery Error, jQuery Ajax Error'));
        foreach ($categories as $key => $category) {
            if (!empty($category)) {
                $categories[$key] = 'ga:eventCategory=='.rawurlencode(trim($category));
            }else{
                unset($categories[$key]); //if user sets empty category by typing two comma together, or last char comma
            }
        }
        $this->filter = implode(',', $categories);
    }
	
}
