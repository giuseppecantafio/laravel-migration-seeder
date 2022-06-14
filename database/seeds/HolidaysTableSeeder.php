<?php

use Illuminate\Database\Seeder;
use \Faker\Generator as Faker;
use App\Holiday;

class HolidaysTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $newHoliday= new Holiday();

        $newHoliday->title = $faker->company();

        $newHoliday->save();
    }
}
