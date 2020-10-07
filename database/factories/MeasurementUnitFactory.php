<?php

namespace LaravelEnso\MeasurementUnits\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use LaravelEnso\MeasurementUnits\Models\MeasurementUnit;

class MeasurementUnitFactory extends Factory
{
    protected $model = MeasurementUnit::class;

    public function definition()
    {
        return [
            'name' => $this->faker->unique()->word,
            'description' => $this->faker->sentence,
        ];
    }
}
