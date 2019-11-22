<?php

namespace LaravelEnso\MeasurementUnits\app\Enums;

use LaravelEnso\Enums\app\Services\Enum;
use LaravelEnso\MeasurementUnits\app\Models\MeasurementUnit;

class MeasurementUnits extends Enum
{
    protected static function attributes()
    {
        return MeasurementUnit::pluck('id', 'name')
            ->mapWithKeys(function ($key, $value) {
                return [__($key) => $value];
            });
    }
}
