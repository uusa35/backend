<?php

use App\Models\Commercial;
use Faker\Generator as Faker;

$factory->define(Commercial::class, function (Faker $faker) {
    return [
        'name_ar' => $faker->name,
        'name_en' => $faker->name,
        'is_double' => $faker->boolean,
        'is_triple' => $faker->boolean,
        'caption_ar' => $faker->name,
        'caption_en' => $faker->name,
        'image' => app()->isLocal() ? 'commercial-01.jpeg' : $faker->numberBetween(43, 49) . '.jpeg',
        'url' => $faker->url,
        'path' => '1.pdf',
        'active' => $faker->boolean(true),
        'order' => $faker->numberBetween(1, 59),
    ];
});
