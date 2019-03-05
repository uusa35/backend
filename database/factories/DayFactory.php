<?php

use App\Models\Day;
use Faker\Generator as Faker;

$factory->define(Day::class, function (Faker $faker) {
    return [
        'day_name' => $faker->dayOfMonth,
        'day_no' => $faker->numberBetween(0, 6)
    ];
});
