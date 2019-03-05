<?php

use App\Models\Service;
use App\Models\User;
use Faker\Generator as Faker;

$fakerAr = \Faker\Factory::create('ar_JO');
$factory->define(Service::class, function (Faker $faker) use ($fakerAr) {
    return [
        'sku' => $faker->postcode,
        'name_ar' => $faker->name,
        'name_en' => $faker->name,
        'on_sale' => $faker->boolean,
        'on_home' => $faker->boolean,
        'on_new' => $faker->boolean,
        'duration' => $faker->numberBetween(1, 9),
        'individuals' => $faker->numberBetween(10, 40),
        'setup_time' => $faker->numberBetween(1, 9),
        'delivery_time' => $faker->numberBetween(1, 9),
        'price' => $faker->randomFloat(3, 10, 200),
        'sale_price' => function ($array) {
            return $array['price'] - rand(1, 5);
        },
        'description_en' => $faker->paragraph,
        'description_ar' => $fakerAr->realText(),
        'notes_ar' => $faker->paragraph,
        'notes_en' => $faker->paragraph,
        'image' => 'food-0' . $faker->numberBetween(1, 12) . '.jpeg',
        'video_url_one' => 'http://www.youtube.com/embed/GhyKqj_P2E4',
        'video_url_two' => 'http://www.youtube.com/embed/GhyKqj_P2E4',
        'is_hot_deal' => $faker->boolean,
        'start_sale' => $faker->dateTime('now'),
        'end_sale' => $faker->dateTimeBetween('now', '1 year'),

        'user_id' => User::companies()->get()->random()->id,
        'active' => $faker->boolean,
    ];
});
