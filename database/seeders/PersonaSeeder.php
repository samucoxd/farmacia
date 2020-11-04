<?php

namespace Database\Seeders;

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PersonaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        DB::table('personas')->insert([
            'nombre' => $faker->firstName,
            'apellido' => $faker->lastName,
            'fnacimiento' => $faker->date('Y-m-d', 'now'),
            'carnet' =>  $faker->ean8
        ]);

        DB::table('personas')->insert([
            'nombre' => $faker->firstName,
            'apellido' => $faker->lastName,
            'fnacimiento' => $faker->date('Y-m-d', 'now'),
            'carnet' =>  $faker->ean8
        ]);

        DB::table('personas')->insert([
            'nombre' => $faker->firstName,
            'apellido' => $faker->lastName,
            'fnacimiento' => $faker->date('Y-m-d', 'now'),
            'carnet' =>  $faker->ean8
        ]);
    }
}
