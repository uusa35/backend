<?php

use App\Models\Category;
use App\Models\Image;
use App\Models\Service;
use App\Models\Tag;
use App\Models\Timing;
use Illuminate\Database\Seeder;

class ServicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Service::class, app()->environment('production') ? 8 : 50)->create()->each(function ($p) {
            $p->categories()->saveMany(Category::all()->random(2));
            $p->timings()->saveMany(Timing::all()->random(5));
            $p->tags()->saveMany(Tag::all()->random(2));
            $p->images()->saveMany(factory(Image::class, 3)->create(['image' => 'food-0' . rand(1, 10) . '.jpeg']));
        });
    }
}
