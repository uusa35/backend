<?php

use App\Models\Area;
use App\Models\Collection;
use App\Models\Notification;
use App\Models\ShipmentPackage;
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
            if ($u->isCompany) {
                $u->areas()->saveMany(Area::all()->random(3));
//                $u->shipment_packages()->saveMany(ShipmentPackage::all()->random(2));
            }
            $u->slides()->saveMany(factory(Slide::class, 5)->create());
            $u->notificationAlerts()->saveMany(Notification::all()->random(2));
        });
    }
}
