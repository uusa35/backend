<?php

use App\Models\Country;
use Faker\Generator as Faker;

$factory->define(Country::class, function (Faker $faker) {
    return [
        'name_ar' => $faker->name,
        'name_en' => $faker->name,
        'country_code' => $faker->countryISOAlpha3,
        'flag' => $faker->numberBetween(1, 10) . '.jpeg',
        'order' => $faker->numberBetween(1,40),
        'main' => $faker->boolean,
        'calling_code' => '00965',
        'has_currency' => $faker->boolean,
        'longitude' => $faker->longitude,
        'latitude' => $faker->latitude,
    ];
});
