<?php

namespace Combindma\Dashui;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Combindma\Dashui\Dashui
 */
class DashuiFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'dashui';
    }
}
