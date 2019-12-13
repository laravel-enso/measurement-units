<?php
Route::middleware(['web', 'auth', 'core'])
    ->group(function () {
        Route::namespace('LaravelEnso\MeasurementUnits\app\Http\Controllers')
            ->prefix('api/administration/measurementUnits')->as('administration.measurementUnits.')
            ->group(function () {
                require 'app/measurementUnits.php';
            });
    });
