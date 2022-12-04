<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        $this->call([
            DepartamentoSeeder::class,
            // ProvinciaSeeder::class,
            DistritoSeeder::class,
            CategoriaSeeder::class,
            ServicioSeeder::class,
            TipoPersonaSeeder::class,
            PersonaSeeder::class,
            VehiculoSeeder::class,
            TipoDePrendaSeeder::class,
            PrendaSeeder::class,
        ]);

    }
}
