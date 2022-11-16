<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DetalleFactura extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle_factura', function (Blueprint $table) {
            $table->id();
            $table->uuid('unique_id')->unique();
            $table->integer('cantidad')->nullable();
            $table->double('precio')->nullable();
            $table->double('subtotal')->nullable();
            $table->double('igv')->nullable();
            $table->double('total')->nullable();
            // $table->enum('estado', ['ACTIVO', 'INACTIVO'])->default('ACTIVO');
            // $table->softDeletes();
            $table->enum('estado', ['activo','inactivo','eliminado'])->default('activo');
            $table->timestamps();

            $table->unsignedBigInteger('factura_id')->nullable();
            $table->unsignedBigInteger('servicio_id')->nullable();
            $table->unsignedBigInteger('prenda_id')->nullable();

            $table->foreign('factura_id')->references('id')->on('factura');
            $table->foreign('servicio_id')->references('id')->on('servicio');
            $table->foreign('prenda_id')->references('id')->on('prenda');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detalle_factura');
    }
}
