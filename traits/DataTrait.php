<?php 

declare(strict_types=1);

namespace Google\GA4\Traits;

use ApplicationException;
use Exception;
use Google\GA4\Classes\Analytics;

trait DataTrait {

    /**
     * Renders the widget.
     */
    public function render()
    {
        try {
            $this->renderData();
        }
        catch (Exception $ex) {
            $this->vars['error'] = $ex->getMessage();
        }

        return $this->makePartial('widget');
    }

    /**
     * Loads the analytics data.
     */
    protected function loadData()
    {
        if (!$days = $this->property('days'))
            throw new ApplicationException(e(trans('google.ga4::lang.errors.invalid_days')).$days);

        if (!$dimension = $this->property('dimension'))
            throw new ApplicationException(e(trans('google.ga4::lang.errors.invalid_dimension')).$dimension);

        if (!$metric = $this->property('metric'))
            throw new ApplicationException(e(trans('google.ga4::lang.errors.invalid_metric')).$metric);

        $obj = Analytics::instance();
        return $obj->service->data_ga->get(
            $obj->viewId,
            $days.'daysAgo',
            'today',
            $metric,
            ['dimensions' => $dimension, 'sort' => '-'.$metric]
        );
    }

}
