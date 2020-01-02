<?php

use LaravelEnso\MeasurementUnits\App\Models\MeasurementUnit;
use Faker\Generator as Faker;

$factory->define(MeasurementUnit::class, fn (Faker $faker) => [
    'name' => $faker->word,
    'description' => $faker->sentence,
]);
