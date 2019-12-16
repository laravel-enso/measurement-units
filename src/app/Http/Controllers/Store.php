<?php

namespace LaravelEnso\MeasurementUnits\app\Http\Controllers;

use Illuminate\Routing\Controller;
use LaravelEnso\MeasurementUnits\app\Http\Requests\ValidateMeasurementUnitRequest;
use LaravelEnso\MeasurementUnits\app\Models\MeasurementUnit;

class Store extends Controller
{
    public function __invoke(ValidateMeasurementUnitRequest $request, MeasurementUnit $measurementUnit)
    {
        $measurementUnit->fill($request->validated())->save();

        return [
            'message' => __('The measurement unit was successfully created'),
            'redirect' => 'administration.measurementUnits.edit',
            'param' => ['measurementUnit' => $measurementUnit->id],
        ];
    }
}
