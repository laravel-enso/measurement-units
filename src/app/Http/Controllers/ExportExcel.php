<?php

namespace LaravelEnso\MeasurementUnits\app\Http\Controllers;

use LaravelEnso\MeasurementUnits\app\Tables\Builders\MeasurementUnitTable;
use Illuminate\Routing\Controller;
use LaravelEnso\Tables\app\Traits\Excel;

class ExportExcel extends Controller
{
    use Excel;

    protected $tableClass = MeasurementUnitTable::class;
}
