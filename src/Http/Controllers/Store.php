<?php

namespace LaravelEnso\MeasurementUnits\Http\Controllers;

use Illuminate\Routing\Controller;
use LaravelEnso\MeasurementUnits\Http\Requests\ValidateMeasurementUnit as Request;
use LaravelEnso\MeasurementUnits\Models\MeasurementUnit;

class Store extends Controller
{
    public function __invoke(Request $request, MeasurementUnit $measurementUnit)
    {
        $measurementUnit->fill($request->validated())->save();

        return [
            'message' => __('The measurement unit was successfully created'),
            'redirect' => 'administration.measurementUnits.edit',
            'param' => ['measurementUnit' => $measurementUnit->id],
        ];
    }
}
