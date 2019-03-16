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
        'order' => $faker->numberBetween(1, 59)
    ];
});
