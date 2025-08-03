<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Insertar registros a la tabla

        DB::table('categoria')->insert([
            [
                'nombre'=> 'TOTTO',
                'origen'=>'Colombia',
                'created_at'=> now(),
                'updated_at'=> now(),
            ],
            [
                'nombre'=> 'NIKE',
                'origen'=>'USA',
                'created_at'=> now(),
                'updated_at'=> now(),
            ]

        ]);


    }
}

