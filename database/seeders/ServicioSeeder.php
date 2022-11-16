<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ServicioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        array_map(function ($servicio){
            DB::table('servicio')->insert([
                'unique_id' => Str::uuid(),
                'descripcion' => $servicio,
                'estado' => 'activo',
                'created_at' => now(),
                'updated_at' => now(),
                'categoria_id' => 1,
            ]);
        },[
            'Docena planchada',
            'Prenda lavada y planchada',
            'Prenda solo planchada',
        ]);

        array_map(function ($servicio, $detalles) {
            DB::table('servicio')->insert([
                'unique_id' => Str::uuid(),
                'descripcion' => $servicio,
                'detalles' => $detalles,
                'estado' => 'activo',
                'created_at' => now(),
                'updated_at' => now(),
                'categoria_id' => 2,
            ]);
        },[
            'Media bolsa de lavandería',
            'Bolsa de lavandería',
        ],[
            'Media bolsa de lavandería: 5 kilos',
            'Bolsa de lavandería: 8 kilos',
        ]);

        array_map(function ($servicio){
            DB::table('servicio')->insert([
                'unique_id' => Str::uuid(),
                'descripcion' => $servicio,
                'estado' => 'activo',
                'created_at' => now(),
                'updated_at' => now(),
                'categoria_id' => 3,
            ]);
        },[
            'Terno de 2 piezas',
            'Abrigo y corbatas',
            'Camisa y pantalón',
            'Vestido de fiesta',
            'Saco y chompa',
        ]);

        array_map(function ($servicio){
            DB::table('servicio')->insert([
                'unique_id' => Str::uuid(),
                'descripcion' => $servicio,
                'estado' => 'activo',
                'created_at' => now(),
                'updated_at' => now(),
                'categoria_id' => 4,
            ]);
        },[
            'Alfombras',
            'Edredones',
            'Juegos de cama',
            'Cobijas o colchas',
            'Cortinas',
        ]);
    }
}
