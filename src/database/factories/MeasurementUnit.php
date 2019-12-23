<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use LaravelEnso\MeasurementUnits\app\Models\MeasurementUnit;
use Faker\Generator as Faker;

$factory->define(MeasurementUnit::class, fn(Faker $faker) => [
    'name' => $faker->word,
    'description' => $faker->sentence,
]);
