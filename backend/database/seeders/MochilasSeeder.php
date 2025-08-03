<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MochilasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    public function run()
    {
      
        $tottoId = DB::table('categoria')->where('nombre', 'Totto')->value('id');

    
        if ($tottoId) {
            DB::table('mochila')->insert([
                [
                    'nombre' => 'Mochila Urbana Classic',
                    'marcaid' => $tottoId,
                    'precio' => 45.99,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                
            ]);

        }
    }
}

