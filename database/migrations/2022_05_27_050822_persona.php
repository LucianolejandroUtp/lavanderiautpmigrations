<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('persona', function (Blueprint $table) {
            $table->id();
            $table->uuid('unique_id')->unique();
            $table->string('nombres')->nullable();
            $table->string('apellidos')->nullable();
            $table->string('dni')->nullable();
            // $table->string('direccion')->nullable();
            // $table->string('referencia')->nullable();
            // $table->string('telefono')->nullable();
            $table->string('email')->nullable();
            $table->string('password')->nullable();
            // $table->string('costoxhora')->nullable();
            // // $table->string('estado')->nullable();
            // $table->enum('estado', ['ACTIVO', 'INACTIVO'])->default('ACTIVO');
            // $table->softDeletes();
            $table->enum('estado', ['activo','inactivo','eliminado'])->default('activo');
            $table->timestamps();

            $table->unsignedBigInteger('tipo_persona_id')->nullable();
            // $table->unsignedBigInteger('distrito_id')->nullable();
            // $table->unsignedBigInteger('cola_de_cita_id')->nullable();

            $table->foreign('tipo_persona_id')->references('id')->on('tipo_persona');
            // $table->foreign('distrito_id')->references('id')->on('distrito');
            // $table->foreign('cola_de_cita_id')->references('id')->on('cola_de_cita');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('persona');
    }
};
