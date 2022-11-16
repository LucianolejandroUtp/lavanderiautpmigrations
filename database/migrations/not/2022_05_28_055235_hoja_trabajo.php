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
        Schema::create('hoja_trabajo', function (Blueprint $table) {
            $table->id();
            $table->string('empresa')->nullable();
            $table->dateTime('fecha')->nullable();
            $table->float('total')->nullable();
            $table->float('igv')->nullable();
            $table->string('mediopago')->nullable();
            $table->enum('estado', ['PRESUPUESTO', 'RECIBO', 'ANULADO'])->default('PRESUPUESTO');
            $table->softDeletes();
            $table->timestamps();
            
            $table->unsignedBigInteger('tecnico_persona_id')->nullable();
            $table->unsignedBigInteger('cliente_persona_id')->nullable();
            $table->unsignedBigInteger('equipo_id')->nullable();

            $table->foreign('tecnico_persona_id')->references('id')->on('persona');
            $table->foreign('cliente_persona_id')->references('id')->on('persona');
            $table->foreign('equipo_id')->references('id')->on('equipo');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hoja_trabajo');
    }
};
