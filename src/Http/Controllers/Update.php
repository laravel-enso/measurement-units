<?php

namespace LaravelEnso\MeasurementUnits\Http\Controllers;

use Illuminate\Routing\Controller;
use LaravelEnso\MeasurementUnits\Http\Requests\ValidateMeasurementUnit as Request;
use LaravelEnso\MeasurementUnits\Models\MeasurementUnit;

class Update extends Controller
{
    public function __invoke(Request $request, MeasurementUnit $measurementUnit)
    {
        $measurementUnit->update($request->validated());

        return ['message' => __('The measurement unit was successfully updated')];
    }
}
