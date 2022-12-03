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
        array_map(function ($nombre, $email, $tipo_persona_id){
            DB::table('persona')->insert([
                'unique_id' => Str::uuid(),
                'nombres' => $nombre,
                'apellidos' => 'n/a',
                'dni' => 'n/a',
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
            'EmpleadoPrueba01',
            'ChóferPrueba01',
        ],[
            'admin@admin.com',
            'cli@gmail.com',
            'emp@gmail.com',
            'chofer@gmail.com',
        ],[
            1,
            2,
            3,
            5,
        ]);
    }
}
