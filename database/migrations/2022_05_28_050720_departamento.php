<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Departamento extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('departamento', function (Blueprint $table) {
            $table->id();
            $table->uuid('unique_id')->unique();
            $table->string('descripcion')->nullable();
            // $table->string('descripcion')->nullable();
            $table->enum('estado', ['activo','inactivo','eliminado'])->default('activo');
            // $table->boolean('deleted')->default(false);
            // $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('departamento');
    }
}
