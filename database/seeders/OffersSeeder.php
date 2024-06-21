<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class OffersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('offers')->insert([
            'imagen' => 'yamaha-c40',
            'nombre' => 'Yamaha C40', 
            'descuento' => '20% de descuento',
            'descripción' => 'Esta guitarra es ideal para principiantes y estudiantes, ofrece un tono cálido y equilibrado, perfecto para música clásica y latina.'           
        ]);

        DB::table('offers')->insert([
            'imagen' => 'fender',
            'nombre' => 'Fender Stratocaster Classic Player 60s', 
            'descuento' => '15% de descuento',
            'descripción' => 'Esta guitarra es perfecta para rock y blues, con un sonido versátil y un diseño clásico.'            
        ]);

        DB::table('offers')->insert([
            'imagen' => 'taylor',
            'nombre' => 'Taylor 214ce Deluxe', 
            'descuento' => '10% de descuento',
            'descripción' => 'Esta guitarra combina un hermoso diseño con una calidad de sonido excepcional, ideal para tocar en vivo o en el estudio.'            
        ]);
    }
}