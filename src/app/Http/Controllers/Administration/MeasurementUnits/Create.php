<?php

namespace LaravelEnso\MeasurementUnits\app\Http\Controllers\Administration\MeasurementUnits;

use Illuminate\Routing\Controller;
use LaravelEnso\MeasurementUnits\app\Forms\Builders\Administration\MeasurementUnitForm;

class Create extends Controller
{
    public function __invoke(MeasurementUnitForm $form)
    {
        return ['form' => $form->create()];
    }
}
