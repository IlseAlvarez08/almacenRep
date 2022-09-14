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
        Schema::create('inventarios', function (Blueprint $table) {
            $table->increments('id');
            $table->string('codigo_barras');
            $table->string('num_producto');
            $table->integer('cantidad_prod');
            $table->string('nom_producto');
            $table->string('ingred_activo');
            $table->string('indicacion');
            $table->string('tipo_unidad');
            $table->double('precio_venta');
            $table->double('precio_total');
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
        Schema::dropIfExists('inventarios');
    }
};
