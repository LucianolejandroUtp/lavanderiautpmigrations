<?php

namespace Database\Seeders;

// use Departamento;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DepartamentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        array_map(function ($departamento) {
            DB::table('departamento')->insert([
                'unique_id' => Str::uuid(),
                'descripcion' => $departamento,
                'estado' => 'activo',
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }, [
            'Amazonas',
            'Áncash',
            'Apurímac',
            'Arequipa',
            'Ayacucho',
            'Cajamarca',
            'Prov. const. del Callao',
            'Cuzco',
            'Huancavelica',
            'Huánuco',
            'Ica',
            'Junín',
            'La Libertad',
            'Lambayeque',
            'Provincia de Lima',
            'Departamento de Lima',
            'Loreto',
            'Madre de Dios',
            'Moquegua',
            'Pasco',
            'Piura',
            'Puno',
            'San Martín',
            'Tacna',
            'Tumbes',
            'Ucayali',
        ]);

        // for ($i = 0; $i < 10; $i++) {
        //     DB::table('departamento')->insert([
        //         'unique_id' => Str::uuid(),
        //         'descripcion' => Str::random(10),
        //         'estado' => 'activo',
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ]);
        // }
        // DB::table('departamento')->insert([
        //     'unique_id' => Str::uuid(),
        //     'descripcion' => 'Arequipa',
        //     'estado' => 'activo',
        //     'created_at' => now(),
        //     'updated_at' => now(),
        // ]);
        // $Departamento = new Departamento();
        // $Departamento->departamento = 'Arequipa';
        // $Departamento->estado = 'activo';
        // $Departamento->save();
    }
}
