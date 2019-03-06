<?php

use App\Models\Collection;
use App\Models\Notification;
use App\Models\Product;
use App\Models\Service;
use App\Models\Slide;
use App\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class, app()->environment('production') ? 3 : 50)->create()->each(function ($u) {
            if ($u->isDesigner) {
                $u->collections()->saveMany(factory(Collection::class, 10));
            }
            $u->slides()->saveMany(factory(Slide::class, 5)->create());
            $u->notificationAlerts()->saveMany(Notification::all()->random(2));
        });
    }
}
