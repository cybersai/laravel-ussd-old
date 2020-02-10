<?php

namespace Cybersai\LaravelUssd\Facades;

use Illuminate\Support\Facades\Facade;

class Ussd extends Facade
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
