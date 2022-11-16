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
        Schema::create('detalle_hoja_trabajo', function (Blueprint $table) {
            $table->id();
            $table->float('equipoSubTotal')->nullable();
            $table->float('perifericoSubTotal')->nullable();
            $table->float('repuestoSubTotal')->nullable();
            $table->softDeletes();
            $table->timestamps();

            $table->unsignedBigInteger('hoja_trabajo_id')->nullable();
            $table->unsignedBigInteger('pieza_id')->nullable();
            $table->unsignedBigInteger('servicio_id')->nullable();

            $table->foreign('hoja_trabajo_id')->references('id')->on('hoja_trabajo');
            $table->foreign('pieza_id')->references('id')->on('pieza');
            $table->foreign('servicio_id')->references('id')->on('servicio');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detalle_hoja_trabajo');
    }
};
