<?php

namespace LaravelEnso\MeasurementUnits;

use LaravelEnso\Enums\EnumServiceProvider as ServiceProvider;
use LaravelEnso\MeasurementUnits\app\Enums\MeasurementUnits;

class EnumServiceProvider extends ServiceProvider
{
    public $register = [
        'measurementUnits' => MeasurementUnits::class,
    ];
}
