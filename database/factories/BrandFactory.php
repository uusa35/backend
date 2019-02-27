<?php

use App\Models\Brand;
use Faker\Generator as Faker;
$fakerAr = \Faker\Factory::create('ar_JO');
$factory->define(Brand::class, function (Faker $faker)  use($fakerAr) {
    return [
        'name' => $faker->word,
        'slug_ar' => $faker->realText(30),
        'slug_en' => $faker->word,
        'image' => $faker->numberBetween(1, 42) . '.jpeg',
        'on_home' => $faker->boolean,
        'order' => $faker->numberBetween(1,10),
    ];
});
