<?php

use App\Models\Slide;
use App\Models\User;
use Faker\Generator as Faker;

$fakerAr = \Faker\Factory::create('ar_JO');
$factory->define(Slide::class, function (Faker $faker) use ($fakerAr) {
    return [
        'image' => $faker->numberBetween(43, 49) . '.jpeg',
        'url' => $faker->url,
        'caption_en' => $faker->name,
        'caption_ar' => $fakerAr->realText(100),
        'active' => $faker->boolean,
        'order' => $faker->numberBetween(1, 10),
        'slidable_type' => $faker->randomElement(['App\Models\User', 'App\Models\Category', 'App\Models\Product', 'App\Models\Service']),
        'slidable_id' => $faker->numberBetween(1,99)
    ];
});
