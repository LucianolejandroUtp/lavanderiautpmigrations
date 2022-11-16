<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Prenda extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prenda', function (Blueprint $table) {
            $table->id();
            $table->uuid('unique_id')->unique();
            // $table->string('prenda')->nullable();
            $table->double('cantidad')->nullable();
            $table->string('color')->nullable();
            $table->string('marca')->nullable();
            $table->string('estado_de_prenda')->nullable();
            $table->double('peso')->nullable();
            $table->text('observacion')->nullable();
            $table->enum('estado', ['activo','inactivo','eliminado'])->default('activo');
            $table->timestamps();

            $table->unsignedBigInteger('tipo_de_prenda_id')->nullable();
            $table->unsignedBigInteger('persona_id')->nullable();

            $table->foreign('tipo_de_prenda_id')->references('id')->on('tipo_de_prenda');
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
        Schema::dropIfExists('prenda');
    }
}
