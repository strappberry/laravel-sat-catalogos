<?php

namespace Strappberry\LaravelSatCatalogos;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Strappberry\LaravelSatCatalogos\Commands\LaravelSatCatalogosCommand;
use Strappberry\LaravelSatCatalogos\Commands\DescargarProcesarCatalogosCommand;

class LaravelSatCatalogosServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-sat-catalogos')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel-sat-catalogos_table')
            ->hasCommand(LaravelSatCatalogosCommand::class)
            ->hasCommand(DescargarProcesarCatalogosCommand::class);
    }
}
