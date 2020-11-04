<?php

namespace Database\Seeders;

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AlmacenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        DB::table('almacens')->insert([
            'codigo' => $faker->randomElement(['almacen 01','almacen 02','almacen 03','almacen 04','almacen 05']),
            'nombre' => $faker->sentence(),
            'ubicacion' => $faker->address,
        ]);

        DB::table('almacens')->insert([
            'codigo' => $faker->randomElement(['almacen 01','almacen 02','almacen 03','almacen 04','almacen 05']),
            'nombre' => $faker->sentence(),
            'ubicacion' => $faker->address,
        ]);

        DB::table('almacens')->insert([
            'codigo' => $faker->randomElement(['almacen 01','almacen 02','almacen 03','almacen 04','almacen 05']),
            'nombre' => $faker->sentence(),
            'ubicacion' => $faker->address,
        ]);

        DB::table('almacens')->insert([
            'codigo' => $faker->randomElement(['almacen 01','almacen 02','almacen 03','almacen 04','almacen 05']),
            'nombre' => $faker->sentence(),
            'ubicacion' => $faker->address,
        ]);
    }
}
