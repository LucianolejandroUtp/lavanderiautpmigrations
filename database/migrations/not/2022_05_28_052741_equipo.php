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
        Schema::create('equipo', function (Blueprint $table) {
            $table->id();
            $table->string('nombre')->nullable();
            $table->string('procesador')->nullable();
            $table->string('motherboard')->nullable();
            $table->string('ramarca')->nullable();
            $table->float('ramsize')->nullable();
            $table->string('diskmarca')->nullable();
            $table->float('disksize')->nullable();
            $table->string('grafica')->nullable();
            $table->boolean('loados')->nullable();
            $table->softDeletes();
            $table->timestamps();

            $table->unsignedBigInteger('tipoequipo_id')->nullable();
            $table->unsignedBigInteger('persona_id')->nullable();

            $table->foreign('tipoequipo_id')->references('id')->on('tipoequipo');
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
        Schema::dropIfExists('equipo');
    }
};
