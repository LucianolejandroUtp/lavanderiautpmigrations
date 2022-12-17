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
            //Cantidad
            1,
            1,
            1,
            1,
            1,
            1,
            1,
            1,
            1,
            1,
            1,
            1,
            1,
            1,
            1,
            1,
            1,
            1,
            1,
            1,
            
        ],[
            //Color
            'Rojo',
            'Azul',
            'Verde',
            'Amarillo',
            'Blanco',
            'Gris',
            'Violeta',
            'Naranja',
            'Negro',
            'Marron',
            'Rojo',
            'Azul',
            'Verde',
            'Amarillo',
            'Blanco',
            'Gris',
            'Violeta',
            'Naranja',
            'Negro',
            'Marron',

        ],[
            //Marca
            'Nike',
            'Adidas',
            'Puma',
            'Reebok',
            'Under Armour',
            'New Balance',
            'Asics',
            'Fila',
            'Vans',
            'Converse',
            'Nike',
            'Adidas',
            'Puma',
            'Reebok',
            'Under Armour',
            'New Balance',
            'Asics',
            'Fila',
            'Vans',
            'Converse',
        ],[
            //Estado de prenda
            'Nuevo',
            'Usado',
            'Desteñido',
            'Rotura',
            'Reparado',
            'Nuevo',
            'Usado',
            'Desteñido',
            'Rotura',
            'Reparado',
            'Nuevo',
            'Usado',
            'Desteñido',
            'Rotura',
            'Reparado',
            'Nuevo',
            'Usado',
            'Desteñido',
            'Rotura',
            'Reparado',
        ],[
            //Observacion
            'Observacion 1',
            'Observacion 2',
            'Observacion 3',
            'Observacion 4',
            'Observacion 5',
            'Observacion 6',
            'Observacion 7',
            'Observacion 8',
            'Observacion 9',
            'Observacion 10',
            'Observacion 11',
            'Observacion 12',
            'Observacion 13',
            'Observacion 14',
            'Observacion 15',
            'Observacion 16',
            'Observacion 17',
            'Observacion 18',
            'Observacion 19',
            'Observacion 20',
        ],[
            //Tipo de prenda
            1,
            2,
            3,
            4,
            5,
            1,
            2,
            3,
            4,
            5,
            1,
            2,
            3,
            4,
            5,
            1,
            2,
            3,
            4,
            5,
        ],[
            //Cliente
            1,
            1,
            1,
            1,
            1,
            2,
            2,
            2,
            2,
            3,
            3,
            3,
            4,
            4,
            4,
            4,
            3,
            3,
            2,
            2,
        ],[
            //Empleado
            5,
            5,
            5,
            6,
            7,
            5,
            5,
            5,
            6,
            7,
            5,
            5,
            5,
            6,
            7,
            5,
            5,
            5,
            6,
            7,
        ],[
            //Servicio
            1,
            2,
            3,
            4,
            5,
            6,
            7,
            8,
            9,
            10,
            11,
            12,
            13,
            14,
            15,
            4,
            4,
            4,
            5,
            5,
        ]);
    }
}
