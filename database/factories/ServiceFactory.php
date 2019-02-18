<?php

use App\Models\Service;
use App\Models\User;
use Faker\Generator as Faker;

$fakerAr = \Faker\Factory::create('ar_JO');
$factory->define(Service::class, function (Faker $faker) use ($fakerAr) {
    return [
        'sku' => $faker->postcode,
        'name_ar' => $fakerAr->realText(20),
        'name_en' => $faker->name,
        'on_sale' => $faker->boolean,
        'on_sale_on_homepage' => $faker->boolean,
        'on_homepage' => $faker->boolean,
        'duration' => $faker->numberBetween(1,9),
        'price' => $faker->randomFloat(3, 10, 200),
        'sale_price' => function ($array) {
            return $array['price'] - rand(1, 5);
        },
        'description_en' => $faker->paragraph,
        'description_ar' => $fakerAr->realText(),
        'notes_ar' => $fakerAr->realText(),
        'notes_en' => $faker->paragraph,
        'image' => $faker->numberBetween(1, 42) . '.jpeg',
        'video_url_one' => $faker->url,
        'video_url_two' => $faker->url,
        'is_hot_deal' => $faker->boolean,
        'start_sale' => $faker->dateTime('now'),
        'end_sale' => $faker->dateTimeBetween('now', '1 year'),

        'user_id' => User::companies()->get()->random()->id,
        'active' => $faker->boolean,
    ];
});
