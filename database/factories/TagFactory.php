<?php

use App\Models\Product;
use App\Models\Tag;
use App\Models\User;
use Faker\Generator as Faker;

$factory->define(Tag::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
        'slug_ar' => $faker->word,
        'slug_en' => $faker->word,
        'order' => $faker->numberBetween(1, 59),
        'user_id' => User::all()->random()->id,
        'taggable_id' => $faker->numberBetween(1,50),
        'taggable_type' => Product::class,
    ];
});
