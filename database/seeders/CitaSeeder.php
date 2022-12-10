<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CitaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        array_map(function ($persona_id, $vehiculo_id){
            DB::table('cita')->insert([
                'unique_id' => Str::uuid(),
                'fecha' => now(),
                'hora' => now(),
                'estado' => 'activo',
                'created_at' => now(),
                'updated_at' => now(),
                'persona_id' => $persona_id,
                'vehiculo_id' => $vehiculo_id,
            ]);
        },[
            2,
            3,
            4,
        ],[
            1,
            2,
            3,
        ]);
    }
}
