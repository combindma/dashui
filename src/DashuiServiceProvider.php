<?php

namespace Combindma\Dashui;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Combindma\Dashui\Commands\DashuiCommand;

class DashuiServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('dashui')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_dashui_table')
            ->hasCommand(DashuiCommand::class);
    }
}
