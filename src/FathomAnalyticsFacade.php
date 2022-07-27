<?php

namespace Astrogoat\FathomAnalytics;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Astrogoat\FathomAnalytics\FathomAnalytics
 */
class FathomAnalyticsFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'fathom-analytics';
    }
}
