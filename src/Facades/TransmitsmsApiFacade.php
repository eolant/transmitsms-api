<?php

namespace Abreeden\TransmitsmsApi\Facades;

use Illuminate\Support\Facades\Facade;

class TransmitsmsApiFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'transmitsmsapi';
    }
}
