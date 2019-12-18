<?php

namespace CyberSai\LaravelUssd\Facades;

use Illuminate\Support\Facades\Facade;

class LaravelUssd extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'laravelussd';
    }
}
