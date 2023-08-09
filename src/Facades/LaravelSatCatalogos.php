<?php

namespace Strappberry\LaravelSatCatalogos\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Strappberry\LaravelSatCatalogos\LaravelSatCatalogos
 */
class LaravelSatCatalogos extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Strappberry\LaravelSatCatalogos\LaravelSatCatalogos::class;
    }
}
