<?php

namespace Brightfish\LaravelApiTraffic\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Brightfish\LaravelApiTraffic\LaravelApiTraffic
 */
class LaravelApiTraffic extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Brightfish\LaravelApiTraffic\LaravelApiTraffic::class;
    }
}
