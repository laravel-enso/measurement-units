<?php

namespace LaravelEnso\MeasurementUnits\app\Http\Controllers;

use Illuminate\Routing\Controller;
use LaravelEnso\MeasurementUnits\app\Forms\Builders\MeasurementUnitForm;

class Create extends Controller
{
    public function __invoke(MeasurementUnitForm $form)
    {
        return ['form' => $form->create()];
    }
}
