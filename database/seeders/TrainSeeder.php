<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 100; $i++) {

            $num_vagoni = $faker->numberBetween(1, 10);

            $new_train = new Train();
            $new_train->manifacturer = $faker->manifacturer();
            $new_train->destination = $faker->destination();
            $new_train->departure = $faker->departure();
            $new_train->wagon_number = $num_vagoni;
            $new_train->arrival_time = $faker->arrival_time();
            $new_train->departure_time = $faker->departure_time();
            $new_train->on_time = $faker->on_time();
            $new_train->late = $faker->late();
            
            $new_train->save();
        }
    }
}
