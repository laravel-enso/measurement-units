<?php

namespace LaravelEnso\MeasurementUnits\Http\Controllers;

use Illuminate\Routing\Controller;
use LaravelEnso\MeasurementUnits\Forms\Builders\MeasurementUnitForm;

class Create extends Controller
{
    public function __invoke(MeasurementUnitForm $form)
    {
        return ['form' => $form->create()];
    }
}
