<?php

namespace LaravelEnso\MeasurementUnits\Http\Controllers;

use Illuminate\Routing\Controller;
use LaravelEnso\MeasurementUnits\Forms\Builders\MeasurementUnit;
use LaravelEnso\MeasurementUnits\Models\MeasurementUnit as Model;

class Edit extends Controller
{
    public function __invoke(Model $measurementUnit, MeasurementUnit $form)
    {
        return ['form' => $form->edit($measurementUnit)];
    }
}
