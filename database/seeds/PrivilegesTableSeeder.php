<?php

use App\Models\Privilege;
use Illuminate\Database\Seeder;

class PrivilegesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $privileges = ['category', 'product', 'slider', 'role', 'user', 'setting', 'currency', 'country', 'gallery', 'page', 'tag', 'brand', 'privilege', 'order', 'coupon', 'size', 'color','collection'];
        foreach ($privileges as $k => $v) {
            factory(Privilege::class)->create(['name' => $v]);
        }
    }
}
