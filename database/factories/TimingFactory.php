<?php

use App\Models\Day;
use App\Models\Timing;
use App\Models\User;
use Faker\Generator as Faker;

$factory->define(Timing::class, function (Faker $faker) {
    return [
        'day' => $faker->date('l'),
        'start' => $faker->time(),
        'end' => $faker->time(),
        'is_off' => $faker->boolean,
        'type' => $faker->name,
        'notes_ar' => $faker->name,
        'notes_en' => $faker->name,
        'week_start' => $faker->numberBetween(1, 6),
        'day_no' => function ($arr) {
            return Day::where(['day_name' => $arr['day']])->first()->day_no;
        },
        'user_id' => User::companies()->get()->random()->id,
    ];
});
