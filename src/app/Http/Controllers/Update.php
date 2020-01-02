<?php

namespace LaravelEnso\MeasurementUnits\App\Http\Controllers;

use Illuminate\Routing\Controller;
use LaravelEnso\MeasurementUnits\App\Http\Requests\ValidateMeasurementUnitRequest as Request;
use LaravelEnso\MeasurementUnits\App\Models\MeasurementUnit;

class Update extends Controller
{
    public function __invoke(Request $request, MeasurementUnit $measurementUnit)
    {
        $measurementUnit->update($request->validated());

        return ['message' => __('The measurement unit was successfully updated')];
    }
}
