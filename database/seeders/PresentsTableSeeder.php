<?php

namespace Database\Seeders;

use App\Models\Present;
use Faker\Generator as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PresentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 10; $i++) {
            $new_present = new Present();
            $new_present->name = $faker->firstName($gender = 'male' | 'famale');
            $new_present->cognome = $faker->lastName();
            $new_present->citta = $faker->city();
            $new_present->indirizzo = $faker->streetAddress();
            $new_present->n_regalo = $faker->randomDigitNotNull();
            $new_present->cognome = $faker->lastName();
            $new_present->code_spedizione = $faker->bothify();
            $new_present->camino = $faker->boolean();
            $new_present->status = $faker->boolean();
            $new_present->desc_regalo = $faker->word();
            $new_present->save();
        }
    }
}