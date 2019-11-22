<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use LaravelEnso\MeasurementUnits\app\Models\MeasurementUnit;
use Faker\Generator as Faker;

$factory->define(MeasurementUnit::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
        'description' => $faker->sentence,
    ];
});
