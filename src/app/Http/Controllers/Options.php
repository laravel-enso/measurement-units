<?php

namespace LaravelEnso\MeasurementUnits\App\Http\Controllers;

use Illuminate\Routing\Controller;
use LaravelEnso\MeasurementUnits\App\Models\MeasurementUnit;
use LaravelEnso\Select\App\Traits\OptionsBuilder;

class Options extends Controller
{
    use OptionsBuilder;

    protected $model = MeasurementUnit::class;
}
