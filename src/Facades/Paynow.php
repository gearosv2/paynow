<?php

namespace gearosv2\Paynow\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \gearosv2\Paynow\Skeleton\SkeletonClass
 */
class Paynow extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return \gearosv2\Paynow\Paynow::class;
    }
}
