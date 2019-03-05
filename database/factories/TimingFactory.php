<?php

use App\Models\Day;
use App\Models\Service;
use App\Models\Timing;
use App\Models\User;
use Faker\Generator as Faker;

$factory->define(Timing::class, function (Faker $faker) {
    return [
        'day' => Day::all()->random()->day,
        'start' => $faker->time(),
        'end' => $faker->time(),
        'is_off' => $faker->boolean,
        'allow_multi_select' => $faker->boolean,
        'type' => $faker->name,
        'notes_ar' => $faker->name,
        'notes_en' => $faker->name,
        'week_start' => $faker->numberBetween(1, 6),
        'day_name_ar' => function ($arr) {
            return Day::where(['day' => $arr['day']])->first()->day_name_ar;
        },
        'day_name_en' => function ($arr) {
            return Day::where(['day' => $arr['day']])->first()->day_name_en;
        },
        'day_no' => function ($arr) {
            return Day::where(['day' => $arr['day']])->first()->day_no;
        },
        'day_id' => function ($arr) {
            return Day::where(['day' => $arr['day']])->first()->id;
        },
        'user_id' => User::companiesHasServices()->get()->random()->id,
        'service_id' => function ($arr) {
            return Service::where(['user_id' => $arr['user_id']])->first()->id;
        },
    ];
});
