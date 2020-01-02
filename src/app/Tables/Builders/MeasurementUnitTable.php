<?php

namespace LaravelEnso\MeasurementUnits\App\Tables\Builders;

use Illuminate\Database\Eloquent\Builder;
use LaravelEnso\MeasurementUnits\App\Models\MeasurementUnit;
use LaravelEnso\Tables\App\Contracts\Table;

class MeasurementUnitTable implements Table
{
    protected const TemplatePath = __DIR__.'/../Templates/measurementUnits.json';

    public function query(): Builder
    {
        return MeasurementUnit::selectRaw('id, name, description, created_at');
    }

    public function templatePath(): string
    {
        return static::TemplatePath;
    }
}
