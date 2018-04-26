<?php

namespace evan45245\monerophp-laravel;

use Illuminate\Support\Facades\Facade;

/**
 * Class MoneroFacade.
 */
class MoneroFacade extends Facade
{
    /**
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'monero';
    }
}
