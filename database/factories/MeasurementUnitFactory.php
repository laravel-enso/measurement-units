<?php

use LaravelEnso\MeasurementUnits\Models\MeasurementUnit;
use Faker\Generator as Faker;

$factory->define(MeasurementUnit::class, fn (Faker $faker) => [
    'name' => $faker->unique()->word,
    'description' => $faker->sentence,
]);
