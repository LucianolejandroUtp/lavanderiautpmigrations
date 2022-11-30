<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class TipoDePrendaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        array_map(function ($tipo_de_prenda){
            DB::table('tipo_de_prenda')->insert([
                'unique_id' => Str::uuid(),
                'descripcion' => $tipo_de_prenda,
                'estado' => 'activo',
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        },[    
            'Abrigo',
            'Bañador',
            'Bata',
            'Bermuda',
            'Blazer',
            'Blusa',   
            'Calcetines',
            'Camisa',
            'Camiseta',
            'Casaca',
            'Chaleco',
            'Chaqueta',
            'Chompón',
            'Falda',     
            'Pantalón',
            'Pijama',
            'Polera',
            'Polerón',
            'Pollera',
            'Pollerón',
            'Polo',
            'Poncho',
            'Ropa interior',
            'Saco',
            'Short',
            'Top',
            'Traje',
            'Traje de baño',
            'Vestido',

            
        ]);
    }
}
