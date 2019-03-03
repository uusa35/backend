<?php

use App\Models\Timing;
use App\Models\User;
use Faker\Generator as Faker;

$factory->define(Timing::class, function (Faker $faker) {
    return [
        'day' => $faker->name,
        'start' => $faker->name,
        'end' => $faker->name,
        'is_off' => $faker->boolean,
        'type' => $faker->name,
        'week_start' => $faker->numberBetween(1,6),
        'day_no' => $faker->dayOfMonth,
        'user_id' => User::companies()->get()->random()->id,
    ];
});
