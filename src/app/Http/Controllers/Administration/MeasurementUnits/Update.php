<?php

namespace LaravelEnso\MeasurementUnits\app\Http\Controllers\Administration\MeasurementUnits;

use LaravelEnso\MeasurementUnits\app\Models\MeasurementUnit;
use Illuminate\Routing\Controller;
use LaravelEnso\MeasurementUnits\app\Http\Requests\Administration\ValidateMeasurementUnitRequest;

class Update extends Controller
{
    public function __invoke(ValidateMeasurementUnitRequest $request, MeasurementUnit $measurementUnit)
    {
        $measurementUnit->update($request->validated());

        return ['message' => __('The measurement unit was successfully updated')];
    }
}
