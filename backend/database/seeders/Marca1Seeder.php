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

        DB::table('marca1')->insert([
            [
                'nombre'=> 'Totto',
                'tipo'=>'Mochila Escolar',
                'created_at'=> now(),
                'updated_at'=> now(),
            ],
            [
                'nombre'=> 'JanSport',
                'descripcion'=>'Mochila Camping',
                'created_at'=> now(),
                'updated_at'=> now(),
            ]
             [
                'nombre'=> 'Nike',
                'descripcion'=>'Mochila de Viaje,
                'created_at'=> now(),
                'updated_at'=> now(),
            ]

        ]);


    }
}

    

