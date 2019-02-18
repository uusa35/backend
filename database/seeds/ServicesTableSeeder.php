<?php

use App\Models\Category;
use App\Models\Image;
use App\Models\Service;
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
        factory(Service::class, app()->environment('production') ? 8 : 120)->create()->each(function ($p) {
            $p->categories()->saveMany(Category::all()->random(3));
            $p->images()->saveMany(factory(Image::class, 5)->create());
        });
    }
}
