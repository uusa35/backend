<?php

use App\Models\Day;
use Illuminate\Database\Seeder;

class DaysTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $days = ['Sunday','Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday','Saturday'];
        foreach ($days as $n => $v) {
            factory(Day::class)->create([
                'day_name' => $v,
                'day_no' => $n
            ]);
        }
    }
}
