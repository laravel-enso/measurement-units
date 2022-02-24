<?php

namespace LaravelEnso\MeasurementUnits\Http\Controllers;

use Illuminate\Routing\Controller;
use LaravelEnso\MeasurementUnits\Forms\Builders\MeasurementUnit;

class Create extends Controller
{
    public function __invoke(MeasurementUnit $form)
    {
        return ['form' => $form->create()];
    }
}
