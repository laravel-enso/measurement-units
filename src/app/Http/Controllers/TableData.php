<?php

namespace LaravelEnso\MeasurementUnits\App\Http\Controllers;

use Illuminate\Routing\Controller;
use LaravelEnso\MeasurementUnits\App\Tables\Builders\MeasurementUnitTable;
use LaravelEnso\Tables\App\Traits\Data;

class TableData extends Controller
{
    use Data;

    protected $tableClass = MeasurementUnitTable::class;
}
