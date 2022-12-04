<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PrendaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        array_map(function ($cantidad, $color, $marca, $estado_de_prenda, $Observacion, $tipo_de_prenda_id, $persona_id_cliente, $persona_id_empleado, $servicio_id){
            DB::table('prenda')->insert([
                'unique_id' => Str::uuid(),
                'cantidad' => $cantidad,
                'color' => $color,
                'marca' => $marca,
                'estado_de_prenda' => $estado_de_prenda,
                'observacion' => $Observacion,
                'estado' => 'activo',
                'created_at' => now(),
                'updated_at' => now(),

                'tipo_de_prenda_id' => $tipo_de_prenda_id,
                'persona_id_cliente' => $persona_id_cliente,
                'persona_id_empleado' => $persona_id_empleado,
                'servicio_id' => $servicio_id,
            ]);
        },[
            1,
            1,
            1,
            1,
            1,
        ],[
            'Rojo',
            'Azul',
            'Verde',
            'Amarillo',
            'Blanco',
        ],[
            'Nike',
            'Adidas',
            'Puma',
            'Reebok',
            'Under Armour',
        ],[
            'Nuevo',
            'Usado',
            'Reparado',
            'Reparado',
            'Reparado',
        ],[
            'Observacion 1',
            'Observacion 2',
            'Observacion 3',
            'Observacion 4',
            'Observacion 5',
        ],[
            1,
            2,
            3,
            4,
            5,
        ],[
            //Cliente
            2,
            3,
            4,
            2,
            3,
        ],[
            //Empleado
            5,
            5,
            5,
            5,
            6,
        ],[
            //Servicio
            4,
            4,
            4,
            5,
            5,
        ]);
    }
}
