<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for ($i=0; $i <20 ; $i++) {
            $train= new Train();
            $train->Azienda=$faker->sentence(7);
            $train->Stazione_di_partenza=$faker->sentence(7);
            $train->Stazione_di_arrivo=$faker->sentence(7);
            $train->Orario_di_partenza=$faker->dateTime();
            $train->Orario_di_arrivo=$faker->dateTime();
            $train->Codice_treno=$faker->sentence(7);
            $train->Numero_Carrozze=$faker->randomNumber(1);
            $train->In_orario=$faker->boolean();
            $train->Cancellato=$faker->boolean();
            $train->save();


        }


    }
}
