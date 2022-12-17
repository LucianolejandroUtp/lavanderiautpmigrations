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
        array_map(function ($servicio, $detalles, $precio) {
            DB::table('servicio')->insert([
                'unique_id' => Str::uuid(),
                'descripcion' => $servicio,
                'detalles' => $detalles,
                'precio' => $precio,
                'estado' => 'activo',
                'created_at' => now(),
                'updated_at' => now(),
                'categoria_id' => 1,
            ]);
        },[
            'Docena planchada',
            'Prenda lavada y planchada',
            'Prenda solo planchada',
        ],[
            'Docena planchada: 12 prendas',
            'Prenda lavada y planchada: 1 prenda',
            'Prenda solo planchada: 1 prenda',
        ],[
            60,
            10,
            5,
        ]);

        array_map(function ($servicio, $detalles, $precio) {
            DB::table('servicio')->insert([
                'unique_id' => Str::uuid(),
                'descripcion' => $servicio,
                'detalles' => $detalles,
                'precio' => $precio,
                'estado' => 'activo',
                'created_at' => now(),
                'updated_at' => now(),
                'categoria_id' => 2,
            ]);
        },[
            'Media bolsa de lavandería',
            'Bolsa de lavandería',
        ],[
            'Media bolsa de lavandería: 4 kilos',
            'Bolsa de lavandería: 8 kilos',
        ],[
            20,
            40,
        ]);

        array_map(function ($servicio, $detalles, $precio) {
            DB::table('servicio')->insert([
                'unique_id' => Str::uuid(),
                'descripcion' => $servicio,
                'detalles' => $detalles,
                'precio' => $precio,
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
        ],[
            'Terno de 2 piezas: 1 terno',
            'Abrigo y corbatas: 1 abrigo y 1 corbata',
            'Camisa y pantalón: 1 camisa y 1 pantalón',
            'Vestido de fiesta: 1 vestido',
            'Saco y chompa: 1 saco y 1 chompa',
        ],[
            15,
            25,
            35,
            45,
            55,
        ]);

        array_map(function ($servicio, $detalles, $precio) {
            DB::table('servicio')->insert([
                'unique_id' => Str::uuid(),
                'descripcion' => $servicio,
                'detalles' => $detalles,
                'precio' => $precio,
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
        ],[
            'Alfombras: 1 alfombra',
            'Edredones: 1 edredón',
            'Juegos de cama: 1 juego de cama',
            'Cobijas o colchas: 1 cobija o colcha',
            'Cortinas: 1 cortina',
        ],[
            75,
            80,
            85,
            90,
            95,
        ]);
    }
}
