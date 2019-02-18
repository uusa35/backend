<?php

use App\Models\Order;
use App\Models\OrderMeta;
use App\Models\Product;
use App\Models\ProductAttribute;
use App\Models\Service;
use Faker\Generator as Faker;

$factory->define(OrderMeta::class, function (Faker $faker) {
    return [
        'order_id' => Order::all()->random()->id,
        'service_id'  => Service::all()->random()->id,
        'qty' => $faker->numberBetween(1, 3),
        'price' => function ($array) {
            $product = Product::whereId($array['product_id'])->first();
            return $product->on_sale ? $product->sale_price : $product->price;
        },
        'product_id' => Product::all()->random()->id,
        'product_attribute_id' => function ($array) {
            $attribute = ProductAttribute::where('product_id', $array['product_id'])->first();
            return $attribute ? $attribute->id : null;
        },
    ];
});
