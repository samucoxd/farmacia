<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Faker\Factory as Faker;

class ArticuloSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        DB::table('articulos')->insert([
            'codigo' => $faker->ean13,
            'descripcion' => $faker->name,
            'lote' => Str::random(),
            'vencimiento' => Carbon::create('2000', '01', '01')
        ]);

        DB::table('articulos')->insert([
            'codigo' => $faker->ean13,
            'descripcion' => $faker->name,
            'lote' => Str::random(),
            'vencimiento' => Carbon::create('2000', '01', '01')
        ]);
        
        DB::table('articulos')->insert([
            'codigo' => $faker->ean13,
            'descripcion' => $faker->name,
            'lote' => Str::random(),
            'vencimiento' => Carbon::create('2000', '01', '01')
        ]);
    }
}
