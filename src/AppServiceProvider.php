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
        $this->publishForms()
            ->publishFactories()
            ->publishSeeders();

        return $this;
    }

    private function loadDependencies()
    {
        $this->loadMigrationsFrom(__DIR__.'/database/migrations');

        $this->loadRoutesFrom(__DIR__.'/routes/api.php');

        return $this;
    }

    private function publishForms()
    {
        $this->publishes([
            __DIR__.'/app/Forms' => app_path('Forms'),
        ], 'forms');

        return $this;
    }

    private function publishFactories()
    {
        $this->publishes([
            __DIR__.'/database/factories' => database_path('factories'),
        ], 'measurement-unit-factories');

        $this->publishes([
            __DIR__.'/database/factories' => database_path('factories'),
        ], 'enso-factories');

        return $this;
    }

    private function publishSeeders()
    {
        $this->publishes([
            __DIR__.'/database/seeds' => database_path('seeds'),
        ], 'measurement-unit-seeder');

        $this->publishes([
            __DIR__.'/database/seeds' => database_path('seeds'),
        ], 'enso-seeders');

        return $this;
    }
}
