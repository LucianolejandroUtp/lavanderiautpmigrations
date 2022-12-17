<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PersonaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        array_map(function ($nombre, $apellidos, $email, $dni, $tipo_persona_id){
            DB::table('persona')->insert([
                'unique_id' => Str::uuid(),
                'nombres' => $nombre,
                'apellidos' => $apellidos,
                'dni' => $dni,
                'email' => $email,

                'password' => "CPHNXBJs5Ck0JWfgf3/GFBPU/fVyoiwr",
                // No se usa esta implementación debido a la falta de compatibilidad con jasypt de Java
                // 'password' => bcrypt('12345678'),

                'tipo_persona_id' => $tipo_persona_id,
                'estado' => 'activo',
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        },[
            'Admin',
            'ClientePrueba01',
            'ClientePrueba02',
            'ClientePrueba03',
            'EmpleadoPrueba01',
            'EmpleadoPrueba02',
            'EmpleadoPrueba03',
            'ChóferPrueba01',
            'ChóferPrueba02',
            'ChóferPrueba03',
            'ChóferPrueba04',
        ],[
            'Admin Admin',
            'Martinez Martinez',
            'Perez Perez',
            'Gonzales Gonzales',
            'Solis Solis',
            'Garcia Garcia',
            'Lopez Lopez',
            'Quispe Quispe',
            'Yupanqui Yupanqui',
            'Pachacuti Pachacuti',
            'Atahualpa Atahualpa',
        ],[
            'admin@admin.com',
            'cli@gmail.com',
            'cli2@gmail.com',
            'cli3@gmail.com',
            'emp@gmail.com',
            'emp2@gmail.com',
            'emp3@gmail.com',
            'chofer@gmail.com',
            'chofer2@gmail.com',
            'chofer3@gmail.com',
            'chofer4@gmail.com',
        ],[
            '11111111',
            '22222222',
            '33333333',
            '44444444',
            '55555555',
            '66666666',
            '77777777',
            '88888888',
            '99999999',
            '10101010',
            '11011011',
        ],[
            1,
            2,
            2,
            2,
            3,
            3,
            3,
            5,
            5,
            5,
            5,
        ]);
    }
}
