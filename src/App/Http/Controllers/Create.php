<?php

namespace LaravelEnso\MeasurementUnits\App\Http\Controllers;

use Illuminate\Routing\Controller;
use LaravelEnso\MeasurementUnits\App\Forms\Builders\MeasurementUnitForm;

class Create extends Controller
{
    public function __invoke(MeasurementUnitForm $form)
    {
        return ['form' => $form->create()];
    }
}
