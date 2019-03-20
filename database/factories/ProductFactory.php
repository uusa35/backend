<?php

use App\Models\Brand;
use App\Models\Color;
use App\Models\Product;
use App\Models\ShipmentPackage;
use App\Models\Size;
use App\Models\User;
use Faker\Generator as Faker;

$fakerAr = \Faker\Factory::create('ar_JO');
$factory->define(Product::class, function (Faker $faker) use ($fakerAr) {
    return [
        'sku' => $faker->postcode,
        'active' => $faker->boolean(true),
        'name_ar' => $faker->sentence,
        'name_en' => $faker->sentence,
        'weight' => $faker->randomDigit,
        'home_delivery_availability' => $faker->boolean,
        'shipment_availability' => $faker->boolean,
        'on_new' => $faker->boolean(true),
        'exclusive' => $faker->boolean(true),
        'on_sale' => $faker->boolean,
        'on_home' => $faker->boolean,
        'is_available' => $faker->boolean(true),
        'delivery_time' => $faker->numberBetween(1, 9),
        'price' => $faker->randomFloat(3, 10, 200),
        'sale_price' => function ($array) {
            return $array['price'] - rand(1, 5);
        },
        'size_chart_image' => env('APP_MODE') . '-' . $faker->numberBetween(1, 42) . '.jpeg',
        'description_en' => $faker->paragraph,
        'description_ar' => $faker->paragraph,
        'notes_ar' => $faker->paragraph,
        'notes_en' => $faker->paragraph,
        'keywords' => $faker->sentence,
        'image' => env('APP_MODE') . '-' . $faker->numberBetween(1, 42) . '.jpeg',
        'start_sale' => $faker->dateTime('now'),
        'end_sale' => $faker->dateTimeBetween('now', '1 year'),
        'check_stock' => $faker->boolean(true),
        'is_hot_deal' => $faker->boolean(true),
        'user_id' => User::companies()->get()->random()->id,
        'color_id' => Color::all()->random()->id,
        'size_id' => Size::all()->random()->id,
        'shipment_package_id' => ShipmentPackage::all()->random()->id,
        'has_attributes' => $faker->boolean(true),
        'video_url_one' => 'http://www.youtube.com/embed/GhyKqj_P2E4',
        'video_url_two' => 'http://www.youtube.com/embed/GhyKqj_P2E4',
        'qty' => $faker->numberBetween(1, 99),
        'brand_id' => Brand::all()->random()->id
    ];
});
