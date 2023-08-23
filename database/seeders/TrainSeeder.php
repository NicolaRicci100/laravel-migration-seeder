<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;
use Faker\Generator as Faker;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for ($i = 0; $i < 20; $i++) {
            $train = new Train();
            $train->azienda = $faker->company();
            $train->stazione_partenza = $faker->city();
            $train->orario_partenza = $faker->time();
            $train->stazione_arrivo = $faker->city();
            $train->orario_arrivo = $faker->time();
            $train->codice_treno = $faker->randomNumber(6, true);
            $train->numero_carrozze = $faker->numberBetween(5, 20);
            $train->in_orario = $faker->randomElement(['SI', 'NO']);
            $train->cancellato = $faker->boolean();


            $train->save();
        }
    }
}
