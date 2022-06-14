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
    public function run(Faker $faker)
    {
        for($i=0; $i<20; $i++) {
        $newHoliday= new Holiday();
        $newHoliday->trip_name = $faker->sentence(2);
        $newHoliday->country = $faker->country();
        $newHoliday->city = $faker->city();
        $newHoliday->days = $faker->numberBetween(0, 20);
        $newHoliday->departue = $faker->dateTimeInInterval('now', '+3 weeks');
        $newHoliday->return = $faker->dateTimeInInterval('+2 weeks', '+5 weeks');
        $newHoliday->description = $faker->paragraph(5, true);
        $newHoliday->save();
         }
    }
}
