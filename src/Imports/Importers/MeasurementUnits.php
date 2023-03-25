<?php

namespace LaravelEnso\MeasurementUnits\Imports\Importers;

use LaravelEnso\DataImport\Contracts\Importable;
use LaravelEnso\DataImport\Models\Import;
use LaravelEnso\Helpers\Services\Obj;
use LaravelEnso\MeasurementUnits\Models\MeasurementUnit;

class MeasurementUnits implements Importable
{
    public function run(Obj $row, Import $import)
    {
        MeasurementUnit::create($row->toArray());
    }
}
