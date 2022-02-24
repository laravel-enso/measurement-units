<?php

namespace LaravelEnso\MeasurementUnits\Http\Controllers;

use Illuminate\Routing\Controller;
use LaravelEnso\MeasurementUnits\Tables\Builders\MeasurementUnit;
use LaravelEnso\Tables\Traits\Data;

class TableData extends Controller
{
    use Data;

    protected $tableClass = MeasurementUnit::class;
}
