<?php

namespace LaravelEnso\MeasurementUnits\app\Http\Controllers\Administration\MeasurementUnits;

use LaravelEnso\MeasurementUnits\app\Tables\Builders\Administration\MeasurementUnitTable;
use Illuminate\Routing\Controller;
use LaravelEnso\Tables\app\Traits\Data;

class TableData extends Controller
{
    use Data;

    protected $tableClass = MeasurementUnitTable::class;
}
