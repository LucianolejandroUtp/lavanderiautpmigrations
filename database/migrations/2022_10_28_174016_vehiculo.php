<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Vehiculo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehiculo', function (Blueprint $table) {
            $table->id();
            $table->uuid('unique_id')->unique();
            $table->string('placa')->nullable();
            $table->string('marca')->nullable();
            $table->string('modelo')->nullable();
            $table->string('color')->nullable();
            // $table->enum('estado', ['ACTIVO', 'INACTIVO'])->default('ACTIVO');
            // $table->softDeletes();
            $table->enum('estado', ['activo','inactivo','eliminado'])->default('activo');
            $table->timestamps();

            $table->unsignedBigInteger('persona_id')->nullable();

            $table->foreign('persona_id')->references('id')->on('persona');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vehiculo');
    }
}
