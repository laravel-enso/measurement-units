<?php

namespace LaravelEnso\MeasurementUnits\Http\Controllers;

use Illuminate\Routing\Controller;
use LaravelEnso\MeasurementUnits\Forms\Builders\MeasurementUnitForm;
use LaravelEnso\MeasurementUnits\Models\MeasurementUnit;

class Edit extends Controller
{
    public function __invoke(MeasurementUnit $measurementUnit, MeasurementUnitForm $form)
    {
        return ['form' => $form->edit($measurementUnit)];
    }
}
