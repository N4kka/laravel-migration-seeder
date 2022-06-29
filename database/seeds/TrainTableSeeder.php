<?php

use App\Train;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Carbon\Carbon;

class TrainTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $company = [
            'treni',
            'italo',
            'metro',
            'hypertrain'
        ];

        $train_type = [
            'regional',
            'intercity',
            'ultraspeed'
        ];

        $class_type = [
            'economy',
            'first',
            'business',
            'executive'
        ];

        //insert records inside the train table
        for ($i = 0; $i < 15; $i++) {
            $train = new Train();
            $train->company = $company[rand(0, count($company) - 1)];
            $train->train_type = $train_type[rand(0, count($train_type) - 1)];
            $train->train_stops = $faker->randomDigit();
            $train->departure_station = $faker->city();
            $train->arrival_station = $faker->city();
            $train->departure_time = $faker->time();
            $train->arrival_time = $faker->time();
            $train->departure_date = $faker->date();
            $train->train_code = $faker->randomDigitNotNull();
            $train->ticket_price = $faker->randomNumber(1, 400);
            $train->carriages_number = $faker->randomDigitNotNull();
            $train->class_type = $class_type[rand(0, count($class_type) - 1)];
            $train->passengers_number = $faker->randomNumber(4, true);
            $train->on_time = $faker->boolean();
            $train->cancelled = $faker->boolean();

            //save the records
            $train->save();

            // dd($train);
        }

        $today_date = Carbon::now()->format('Y-m-d');

        //Alternative solution
        // $today = Carbon::now()->format('Y-m-d');
        // $tomorrow = $today->add(1, 'day');

        for ($i = 0; $i < 10; $i++) {
            $train = new Train();
            $train->company = $company[rand(0, count($company) - 1)];
            $train->train_type = $train_type[rand(0, count($train_type) - 1)];
            $train->train_stops = $faker->randomDigit();
            $train->departure_station = $faker->city();
            $train->arrival_station = $faker->city();
            $train->departure_time = $faker->time();
            $train->arrival_time = $faker->time();
            //Alternative solution based on a range of dates: 
            //$train->departure_date = $faker->dateTimeBetween($today, $tomorrow)
            $train->departure_date = $faker->date($today_date);
            $train->train_code = $faker->randomDigitNotNull();
            $train->ticket_price = $faker->randomNumber(1, 400);
            $train->carriages_number = $faker->randomDigitNotNull();
            $train->class_type = $class_type[rand(0, count($class_type) - 1)];
            $train->passengers_number = $faker->randomNumber(4, true);
            $train->on_time = $faker->boolean();
            $train->cancelled = $faker->boolean();

            //save the records
            $train->save();

            // dd($train);
        }
    }
}
