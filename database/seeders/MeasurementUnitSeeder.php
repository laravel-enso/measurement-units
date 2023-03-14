<?php

namespace LaravelEnso\MeasurementUnits\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Collection;
use LaravelEnso\MeasurementUnits\Models\MeasurementUnit;

class MeasurementUnitSeeder extends Seeder
{
    private const Units = [
        ['name' => 'Piece', 'description' => null],
    ];

    public function run()
    {
        Collection::wrap(self::Units)
            ->each(fn ($units) => MeasurementUnit::factory()->create($units));
    }
}
