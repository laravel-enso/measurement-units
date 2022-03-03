<?php

namespace LaravelEnso\MeasurementUnits\Tables\Builders;

use Illuminate\Database\Eloquent\Builder;
use LaravelEnso\MeasurementUnits\Models\MeasurementUnit as Model;
use LaravelEnso\Tables\Contracts\Table;

class MeasurementUnit implements Table
{
    private const TemplatePath = __DIR__.'/../Templates/measurementUnits.json';

    public function query(): Builder
    {
        return Model::selectRaw('id, name, description, created_at');
    }

    public function templatePath(): string
    {
        return self::TemplatePath;
    }
}
