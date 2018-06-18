<?php

namespace LMillucci\CivicSIP\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @method static \Blockvis\Civic\Sip\UserData exchangeToken(string $jwtToken)
 *
 * @see \Blockvis\Civic\Sip\Client
 */
class CivicFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor() {
        return 'civic';
    }
}
