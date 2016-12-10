<?php

namespace Lenh\Multichain\Facades;

use Illuminate\Support\Facades\Facade;

class MultiChain extends Facade
{

    /**
     * Get the registered name of the component
     * @return string
     */
    protected static function getFacadeAccessor() {
        return 'multichain';
    }
}