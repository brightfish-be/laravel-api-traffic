<?php

namespace Brightfish\LaravelApiTraffic;

use Brightfish\LaravelApiTraffic\Commands\LaravelApiTrafficCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class LaravelApiTrafficServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-api-traffic')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel_api_traffic_table')
            ->hasCommand(LaravelApiTrafficCommand::class);
    }
}
