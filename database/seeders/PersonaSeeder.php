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
        
        array_map(function ($nombre, $email){
            DB::table('persona')->insert([
                'unique_id' => Str::uuid(),
                'nombres' => $nombre,
                'apellidos' => 'n/a',
                'dni' => 'n/a',
                'email' => $email,
                'password' => bcrypt('12345678'),
                'tipo_persona_id' => 1,
                'estado' => 'activo',
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        },[
            'Admin',
        ],[
            'admin@admin.com',
        ]);
    }
}
