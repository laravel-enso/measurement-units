<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Collection;
use LaravelEnso\MeasurementUnits\App\Models\MeasurementUnit;

class MeasurementUnitsSeeder extends Seeder
{
    private const UNITS = [
        ['name' => 'Piece', 'description' => null],
    ];

    public function run()
    {
        (new Collection(self::UNITS))
            ->each(fn ($units) => factory(MeasurementUnit::class)->create($units));
    }
}
