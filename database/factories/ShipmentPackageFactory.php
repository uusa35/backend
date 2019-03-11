<?php

use App\Models\Area;
use App\Models\Country;
use App\Models\ShipmentPackage;
use App\Models\User;
use Faker\Generator as Faker;

$factory->define(ShipmentPackage::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'slug_ar' => $faker->name,
        'slug_en' => $faker->name,
        'charge' => $faker->randomFloat(1, 0, 9),
        'active' => $faker->boolean(true),
        'user_id' => User::companies()->get()->random()->id,
        'country_id' => Country::active()->get()->random()->id,
        'area_id' => function ($arr) {
            return Area::where(['country_id' => $arr['country_id']])->get()->random()->id;
        },
        'is_available' => $faker->boolean(true),
        'notes_ar' => $faker->paragraph,
        'notes_en' => $faker->paragraph,

    ];
});
