<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GuitarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('guitars')->insert([
            'nombre' => 'Morris WJ25 JAPAN 80s',
            'marca' => 'Morris',
            'modelo' => 'WJ25 JAPAN 80s',
            'tipo' => 'Acústica',
            'color' => 'Amarillo claro',
            'imagen' => 'guitarraM',
            'stock' => '5',
            'precio' => '550.00'
        ]);

        DB::table('guitars')->insert([
            'nombre' => 'Gibson 1941 SJ-100 USA 2013',
            'marca' => 'Gibson',
            'modelo' => 'SJ-100 USA 2013',
            'tipo' => 'acústica',
            'color' => 'Vintage Sunburst',
            'imagen' => 'guitarraG',
            'stock' => '5',
            'precio' => '2600.00'
        ]);

        DB::table('guitars')->insert([
            'nombre' => 'The Loar LH-302T CCb 2019',
            'marca' => 'The Loar',
            'modelo' => 'LH-302T CCb 2019',
            'tipo' => 'Eléctrica',
            'color' => 'Cherry Burst',
            'imagen' => 'guitarraT',
            'stock' => '7',
            'precio' => '955.00'
        ]);

        DB::table('guitars')->insert([
            'nombre' => 'Yamaha EZ AG SELF teaching guitar red',
            'marca' => 'Yamaha',
            'modelo' => 'EZ AG',
            'tipo' => 'Eléctrica',
            'color' => 'Rojo',
            'imagen' => 'guitarraY',
            'stock' => '8',
            'precio' => '295.00'
        ]);

        DB::table('guitars')->insert([
            'nombre' => 'Alhambra 5p',
            'marca' => 'Alhambra',
            'modelo' => '5p',
            'tipo' => 'Clásica',
            'color' => 'Natural acabado brillo',
            'imagen' => 'guitarraA',
            'stock' => '2',
            'precio' => '874.00'
        ]);

        DB::table('guitars')->insert([
            'nombre' => 'Jose Gomez Clásica 205',
            'marca' => 'Jose Gomez',
            'modelo' => 'Clásica 205',
            'tipo' => 'Clásica',
            'color' => 'Caoba',
            'imagen' => 'guitarraJ',
            'stock' => '10',
            'precio' => '248.00'
        ]);

    }
}