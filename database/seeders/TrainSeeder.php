<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Riempi la tabella
        for ($i = 0; $i < 20; $i++) {
            // Istanzio il model
            $train = new Train();
            // Ne riempio le colonne
            $train->company = fake()->company;
            $train->departure_station = fake()->name();
            $train->arrival_station = fake()->name();
            $train->departure_time = fake()->date('Y_m_d').' '.fake()->time();
            $train->arrival_time = fake()->date('Y_m_d').' '.fake()->time();
            $train->train_code = fake()->randomNumber(5, true);
            $train->carriages_number = fake()->randomDigit();
            $train->on_time = fake()->boolean();
            $train->arrival_station = fake()->boolean();


            // Lo salvo in persistenza
            $train->save();
        }
    }
}
