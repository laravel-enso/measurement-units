<?php

namespace LaravelEnso\MeasurementUnits\app\Tables\Builders\Administration;

use LaravelEnso\MeasurementUnits\app\Models\MeasurementUnit;
use Illuminate\Database\Eloquent\Builder;
use LaravelEnso\Tables\app\Contracts\Table;

class MeasurementUnitTable implements Table
{
    protected const TemplatePath = __DIR__.'/../../Templates/Administration/measurementUnits.json';

    public function query(): Builder
    {
        return MeasurementUnit::selectRaw('
            id, name, description, created_at
        ');
    }

    public function TemplatePath(): string
    {
        return static::TemplatePath;
    }
}
