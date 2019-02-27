<?php

use App\Models\Area;
use App\Models\Country;
use Faker\Generator as Faker;

$factory->define(Area::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'slug_ar' => $faker->name,
        'slug_en' => $faker->name,
        'country_id' => Country::all()->random()->id,
    ];
});
