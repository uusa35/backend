<?php

use App\Models\Setting;
use Faker\Generator as Faker;

$fakerAr = \Faker\Factory::create('ar_JO');
$factory->define(Setting::class, function (Faker $faker) use ($fakerAr) {
    return [
        'company_ar' => $faker->name,
        'company_en' => $faker->name,
        'address_ar' => $faker->name,
        'address_en' => $faker->name,
        'mobile' => $faker->bankAccountNumber,
        'whatsapp' => $faker->bankAccountNumber,
        'phone' => $faker->bankAccountNumber,
        'country_ar' => $faker->country,
        'country_en' => $faker->country,
        'zipcode' => $faker->randomDigit,
        'email' => $faker->email,
        'youtube' => $faker->url,
        'instagram' => $faker->url,
        'twitter' => $faker->url,
        'snapchat' => $faker->url,
        'facebook' => $faker->url,
        'logo' => 'logo-0' . $faker->numberBetween(1, 8) . '.png',
        'size_chart' => $faker->numberBetween(1, 42) . '.jpeg',
        'main_theme_color' => '#4611a7'
//        'shipment_service' => $faker->boolean(true),
//        'delivery_service' => $faker->boolean(false),
//        'delivery_service_cost' => 5,
//        'delivery_service_minimum_charge' => 100
    ];
});
