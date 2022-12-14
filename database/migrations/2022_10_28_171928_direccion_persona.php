<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DireccionPersona extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('direccion_persona', function (Blueprint $table) {
        //     $table->id();
        //     $table->uuid('unique_id')->unique();
        //     // $table->string('descripcion')->nullable();
        //     // // $table->string('descripcion')->nullable();
        //     // $table->enum('estado', ['ACTIVO', 'INACTIVO'])->default('ACTIVO');
        //     // $table->softDeletes();
        //     $table->enum('estado', ['activo','inactivo','eliminado'])->default('activo');
        //     $table->timestamps();

        //     $table->unsignedBigInteger('direccion_id')->nullable();
        //     $table->unsignedBigInteger('persona_id')->nullable();

        //     $table->foreign('direccion_id')->references('id')->on('direccion');
        //     $table->foreign('persona_id')->references('id')->on('persona');

        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('direccion_persona');
    }
}
