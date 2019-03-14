<?php

use App\Models\Area;
use App\Models\Country;
use App\Models\Currency;
use App\Models\Governate;
use Illuminate\Database\Seeder;

class CountriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $countries = config('countries');
        foreach ($countries as $country) {
            $country = factory(Country::class)->create(
                [
                    'name' => ucfirst($country['name_en']),
                    'slug_ar' => $country['name_ar'],
                    'slug_en' => $country['name_en'],
                    'country_code' => $country['country_code'],
                    'currency_symbol_ar' => $country['currency_symbol_ar'],
                    'currency_symbol_en' => $country['currency_symbol_en'],
                    'is_local' => ucfirst($country['name_en']) === 'Kuwait' ? true : false
                ]
            );
            if ($country->name == 'Kuwait') {
                $areas = ['Al Asimah', 'Hawalli', 'Farwaniya', 'Mubarak', 'Ahmadi', 'Jahra'];
                foreach ($areas as $k => $v) {
                    $country->areas()->save(factory(Area::class)->create(['name' => $v, 'slug_en' => $v, 'slug_ar' => $v]));
                }
            } else {
                $country->areas()->saveMany(factory(Area::class, 5)->create());
            }
        }
    }
}
