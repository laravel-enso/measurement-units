<?php

namespace LaravelEnso\MeasurementUnits\app\Http\Controllers;

use LaravelEnso\MeasurementUnits\app\Tables\Builders\MeasurementUnitTable;
use Illuminate\Routing\Controller;
use LaravelEnso\Tables\app\Traits\Init;

class InitTable extends Controller
{
    use Init;

    protected $tableClass = MeasurementUnitTable::class;
}
