<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use LaravelEnso\MeasurementUnits\app\Models\MeasurementUnit;

class MeasurementUnitsSeeder extends Seeder
{
    private const UNITS = [
        ['name' => 'Piece', 'description' => null],
    ];

    public function run()
    {
        DB::transaction(fn() => (
            collect(self::UNITS)->each(fn($units) => (
                factory(MeasurementUnit::class)->create($units)
            ))
        ));
    }
}
