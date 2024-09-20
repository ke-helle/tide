<?php

namespace Kehelle\Tide;

use Illuminate\Support\Facades\Blade;
use Illuminate\View\ComponentAttributeBag;
use Kehelle\Tide\Commands\TideCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class TideServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('tide')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_tide_table')
            ->hasCommand(TideCommand::class);
    }

    public function packageBooted()
    {
        $this->bootComponents();
        $this->bootMacros();
    }

    private function bootComponents()
    {
        // Register all components under a single namespace.
        Blade::componentNamespace('Kehelle\\Tide\\Components', 'tide');

        // Register aliases for certain components.
        //        $this->callAfterResolving(BladeCompiler::class, function (BladeCompiler $blade) {
        //            $prefix = config('tide.prefix', '');
        //
        //            foreach (config('tide.components', []) as $alias => $component) {
        //                $blade->component($component, $alias, $prefix);
        //            }
        //        });
    }

    private function bootMacros(): void
    {
        if (! ComponentAttributeBag::hasMacro('hasStartsWith')) {
            ComponentAttributeBag::macro('hasStartsWith', function ($key) {
                return (bool) $this->whereStartsWith($key)->first();
            });
        }

        if (! ComponentAttributeBag::hasMacro('firstWhereStartsWith')) {
            ComponentAttributeBag::macro('firstWhereStartsWith', function ($key) {
                return $this->whereStartsWith($key)->first() ?? null;
            });
        }
    }
}
