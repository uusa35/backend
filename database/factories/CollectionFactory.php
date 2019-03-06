<?php

use App\Models\Collection;
use App\Models\Product;
use App\Models\User;
use Faker\Generator as Faker;
$fakerAr = \Faker\Factory::create('ar_JO');
$factory->define(Collection::class, function (Faker $faker) use($fakerAr) {
    return [
        'name' => $faker->name,
        'slug_ar' => $faker->realText(40),
        'slug_en' => $faker->name,
        'keywords' => $faker->sentence,
        'user_id' => User::all()->random()->id,
//        'collectionable_id' => $faker->numberBetween(1,50),
//        'collectionable_type' => Product::class,
    ];
});
