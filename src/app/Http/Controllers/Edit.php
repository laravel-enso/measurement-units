<?php

namespace LaravelEnso\MeasurementUnits\App\Http\Controllers;

use Illuminate\Routing\Controller;
use LaravelEnso\MeasurementUnits\App\Forms\Builders\MeasurementUnitForm;
use LaravelEnso\MeasurementUnits\App\Models\MeasurementUnit;

class Edit extends Controller
{
    public function __invoke(MeasurementUnit $measurementUnit, MeasurementUnitForm $form)
    {
        return ['form' => $form->edit($measurementUnit)];
    }
}
