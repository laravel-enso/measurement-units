<?php

namespace LaravelEnso\MeasurementUnits\app\Http\Controllers;

use Illuminate\Routing\Controller;
use LaravelEnso\MeasurementUnits\app\Models\MeasurementUnit;

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
