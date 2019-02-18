<?php

use App\Models\Category;
use App\Models\Image;
use App\Models\Product;
use App\Models\ProductAttribute;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // each product has the following :
        // many product attributes and
        // belongs to many categories
        // has gallery with images
        // belongs to many orders !!!
        factory(Product::class, app()->environment('production') ? 8 : 50)->create()->each(function ($p) {
            if($p->has_attribute) {
                $p->product_attributes()->saveMany(factory(ProductAttribute::class,2)->create());
            }
            $p->categories()->saveMany(Category::all()->random(2));
            $p->images()->saveMany(factory(Image::class, 3)->create());
        });
    }
}
