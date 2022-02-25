<?php

namespace LaravelEnso\MeasurementUnits\Http\Controllers;

use Illuminate\Routing\Controller;
use LaravelEnso\MeasurementUnits\Tables\Builders\MeasurementUnit;
use LaravelEnso\Tables\Traits\Excel;

class ExportExcel extends Controller
{
    use Excel;

    protected $tableClass = MeasurementUnit::class;
}
