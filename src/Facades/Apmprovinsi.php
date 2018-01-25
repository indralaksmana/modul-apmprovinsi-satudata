<?php namespace Satudata\Apmprovinsi\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * The Apmprovinsi facade.
 *
 * @package Satudata\Apmprovinsi
 * @author  MKI <info@mkitech.net>
 */
class Apmprovinsi extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'apmprovinsi';
    }
}
