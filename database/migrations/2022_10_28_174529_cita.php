<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Cita extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cita', function (Blueprint $table) {
            $table->id();
            $table->uuid('unique_id')->unique();
            $table->date('fecha')->nullable();
            $table->time('hora')->nullable();
            // $table->string('numero')->nullable();
            // $table->enum('estado', ['ACTIVO', 'INACTIVO'])->default('ACTIVO');
            // $table->softDeletes();
            $table->enum('estado', ['activo','inactivo','eliminado'])->default('activo');
            $table->timestamps();

            $table->unsignedBigInteger('persona_id')->nullable();
            $table->unsignedBigInteger('vehiculo_id')->nullable();

            $table->foreign('persona_id')->references('id')->on('persona');
            $table->foreign('vehiculo_id')->references('id')->on('vehiculo');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cita');
    }
}
