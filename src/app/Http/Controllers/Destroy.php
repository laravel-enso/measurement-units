<?php

namespace LaravelEnso\MeasurementUnits\App\Http\Controllers;

use Illuminate\Routing\Controller;
use LaravelEnso\MeasurementUnits\App\Models\MeasurementUnit;

class Destroy extends Controller
{
    public function __invoke(MeasurementUnit $measurementUnit)
    {
        $measurementUnit->delete();

        return [
            'message' => __('The measurement unit was successfully deleted'),
            'redirect' => 'administration.measurementUnits.index',
        ];
    }
}
