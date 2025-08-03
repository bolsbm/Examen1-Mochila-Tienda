<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MochilasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
         DB::table('mochila')->insert([
            [
             'nombre' => 'Mochila Urbana Classic',
            'marca_id' => $tottoId,
            'descripcion' => 'Mochila ideal para el día a día, con múltiples compartimentos.',
            'precio' => 45.99,
                'created_at'=> now(),
                'updated_at'=> now(),
            ],
            [
                  'nombre' => 'Mochila Urbana Classic',
            'marca_id' => $usaId,
            'descripcion' => 'Mochila ideal para el día a día, con múltiples compartimentos.',
            'precio' => 45.99,
                'created_at'=> now(),
                'updated_at'=> now(),
            ]

        ]);
    }
}
