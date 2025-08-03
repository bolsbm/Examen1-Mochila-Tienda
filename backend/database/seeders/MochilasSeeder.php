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
         DB::table('categoria')->insert([
            [
                'nombre'=> 'Mochila escolar',
                'origen'=>'Colombia',
                'created_at'=> now(),
                'updated_at'=> now(),
            ],
            [
                'nombre'=> 'Mochila Campo',
                'origen'=>'USA',
                'created_at'=> now(),
                'updated_at'=> now(),
            ]

        ]);
    }
}
