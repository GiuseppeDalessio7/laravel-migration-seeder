<?php

namespace Database\Seeders;

use Faker\Generator as Faker;
use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for ($i = 0; $i < 10; $i++) {

            $train = new Train();

            $train->Azienda = $faker->word();
            $train->Stazione_di_Partenza = $faker->word(25);
            $train->Stazione_di_Arrivo = $faker->word(25);
            $train->Orario_di_Partenza = $faker->time();
            $train->Giorno_di_Partenza = $faker->date();
            $train->Giorno_di_Arrivo = $faker->date();
            $train->Orario_di_Arrivo = $faker->time();
            $train->Codice_Treno = $faker->bothify('???-#####');
            $train->Numero_delle_Carrozze = $faker->numberBetween(1, 20);
            $train->In_orario = $faker->boolean(false);
            $train->Cancellato = $faker->boolean(false);

            $train->save();
        }
    }
}
