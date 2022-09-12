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
        Schema::create('entradas', function (Blueprint $table) {
            $table->increments(id_producto);
            $table->numeric('codigo_barras');
            $table->integer('num_producto');
            $table->integer('cantidad_prod');
            $table->string('nom_producto');
            $table->string('ingred_activo');
            $table->timestamp('indicacion');
            $table->string('tipo_unidad');
            $table->numeric('precio_venta');
            $table->numeric('prec_total');
            $table->timestamps();

            $table->foreign('name')->references('name')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inventario');
    }
};
