<?php

namespace Iceberg\Captcha\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Iceberg\Captcha\Captcha
 */
class Captcha extends Facade
{
    /**
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'captcha';
    }
}
