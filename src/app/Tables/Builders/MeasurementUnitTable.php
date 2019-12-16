<?php

namespace LaravelEnso\MeasurementUnits\app\Tables\Builders;

use Illuminate\Database\Eloquent\Builder;
use LaravelEnso\MeasurementUnits\app\Models\MeasurementUnit;
use LaravelEnso\Tables\app\Contracts\Table;

class MeasurementUnitTable implements Table
{
    protected const TemplatePath = __DIR__.'/../Templates/measurementUnits.json';

    public function query(): Builder
    {
        return MeasurementUnit::selectRaw('
            id, name, description, created_at
        ');
    }

    public function templatePath(): string
    {
        return static::TemplatePath;
    }
}
