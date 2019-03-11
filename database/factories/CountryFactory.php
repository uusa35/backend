<?php

use App\Models\Country;
use Faker\Generator as Faker;

$factory->define(Country::class, function (Faker $faker) {
    return [
        'name' => $faker->country,
        'slug_ar' => $faker->name,
        'slug_en' => $faker->name,
        'country_code' => $faker->countryISOAlpha3,
        'image' => env('APP_MODE').'-'.$faker->numberBetween(1, 42) . '.jpeg',
        'order' => $faker->numberBetween(1,40),
        'main' => $faker->boolean(true),
        'calling_code' => '00965',
        'has_currency' => $faker->boolean,
        'longitude' => $faker->longitude,
        'latitude' => $faker->latitude,
    ];
});
