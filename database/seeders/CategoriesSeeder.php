<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            'nombre' => 'Acústica',            
        ]);

        DB::table('categories')->insert([
            'nombre' => 'Eléctrica',            
        ]);

        DB::table('categories')->insert([
            'nombre' => 'Clásica',            
        ]);
    }
}