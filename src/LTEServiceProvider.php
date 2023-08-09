<?php

namespace SanlyApp\LTE;

use SanlyApp\LTE\Commands\LTECommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class LTEServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('lte')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_lte_table')
            ->hasCommand(LTECommand::class);
    }
}
