<?php

namespace LaravelEnso\MeasurementUnits;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->publishDependencies()
            ->loadDependencies();
    }

    private function publishDependencies()
    {
        $this->publishes([
            __DIR__.'/app/Forms' => app_path('Forms'),
        ], 'forms');

        $this->publishes([
            __DIR__.'/database/factories' => database_path('factories'),
        ], 'measurement-unit-factorie');

        $this->publishes([
            __DIR__.'/database/factories' => database_path('factories'),
        ], 'enso-factories');

        $this->publishes([
            __DIR__.'/database/seeds' => database_path('seeds'),
        ], 'measurement-unit-seeder');

        $this->publishes([
            __DIR__.'/database/seeds' => database_path('seeds'),
        ], 'enso-seeders');

        return $this;
    }

    private function loadDependencies()
    {
        $this->loadMigrationsFrom(__DIR__.'/database/migrations');

        $this->loadRoutesFrom(__DIR__.'/routes/api.php');

        return $this;
    }
}
