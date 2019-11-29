<?php

namespace LaravelEnso\MeasurementUnits\app\Http\Controllers;

use LaravelEnso\MeasurementUnits\app\Models\MeasurementUnit;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use LaravelEnso\Select\app\Traits\OptionsBuilder;

class Options extends Controller
{
    use OptionsBuilder;

    protected $model = MeasurementUnit::class;

    //protected $queryAttributes = ['name'];

    //public function query(Request $request)
    //{
    //    return MeasurementUnit::query();
    //}
}
