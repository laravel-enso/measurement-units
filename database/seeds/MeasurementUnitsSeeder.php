<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Collection;
use LaravelEnso\MeasurementUnits\Models\MeasurementUnit;

class MeasurementUnitsSeeder extends Seeder
{
    private const Units = [
        ['name' => 'Piece', 'description' => null],
    ];

    public function run()
    {
        (new Collection(self::Units))
            ->each(fn ($units) => factory(MeasurementUnit::class)->create($units));
    }
}
