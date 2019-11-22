<?php

namespace LaravelEnso\MeasurementUnits;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->publishDependencies();

        $this->loadDependencies();
    }

    private function publishDependencies(): void
    {
        $this->publishes([
            __DIR__.'/app/Forms' => app_path('Forms'),
        ], 'forms');

        $this->publishes([
            __DIR__.'/database/factories' => database_path('factories'),
        ], 'measurement-units-factories');

        $this->publishes([
            __DIR__.'/database/factories' => database_path('factories'),
        ], 'enso-factories');
    }

    private function loadDependencies(): void
    {
        $this->loadMigrationsFrom(__DIR__.'/database/migrations');

        $this->loadRoutesFrom(__DIR__.'/routes/api.php');
    }
}
