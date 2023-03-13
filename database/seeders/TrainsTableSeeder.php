<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Train;


use Faker\Generator as Faker;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {

        for ($i=0; $i < 1000; $i++) { 

            $train = new Train();
            $train->Azienda = $faker->word();
            $train->Stazione_di_partenza = $faker->word();
            $train->Stazione_di_arrivo = $faker->word();
            $train->Data = $faker->date();
            $train->Orario_di_partenza = $faker->time();
            $train->Orario_di_arrivo = $faker->time();
            $train->Codice_treno = $faker->numberBetween();
            $train->Numero_carrozze = $faker->numberBetween(1, 20);
            $train->In_orario = $faker->boolean();
            $train->Cancellato = $faker->boolean();
            $train->save();
        }
        

    }
}
