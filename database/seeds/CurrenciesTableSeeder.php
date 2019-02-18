<?php

use App\Models\Country;
use App\Models\Currency;
use Illuminate\Database\Seeder;

class CurrenciesTableSeeder extends Seeder
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
            $currentCountry = Country::where(['calling_code' => $country['calling_code']])->first();
            factory(Currency::class)->create(
                [
                    'name_ar' => $country['currency_ar'],
                    'name_en' => $country['currency_en'],
                    'currency_symbol_ar' => $country['currency_symbol_ar'],
                    'currency_symbol_en' => $country['currency_symbol_en'],
                    'exchange_rate' => $country['exchange_rate'],
                    'country_id' => $currentCountry ? $currentCountry->id : Country::all()->random()->id
                ]
            );
        }
    }
}
