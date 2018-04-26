<?php

namespace evan45245\monerophplaravel;

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
