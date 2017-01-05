<?php

namespace ThiAlves\Auditing\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see ThiAlves\Auditing\Auditing
 */
class Auditing extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'ThiAlves\Auditing\Auditing';
    }
}
