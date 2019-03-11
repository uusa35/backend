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
                    'slug_ar' => $country['name_ar'],
                    'slug_en' => $country['name_en'],
                    'country_code' => $country['country_code'],
                    'currency_symbol_ar' => $country['currency_symbol_ar'],
                    'currency_symbol_en' => $country['currency_symbol_en'],
                ]
            );
            $country->areas()->saveMany(factory(Area::class, 5)->create());
        }
    }
}
