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
        Schema::create('principales', function (Blueprint $table) {
            $table->increments(id);
            $table->string('name')->unsigned();
            $table->string('last_name');
            $table->blob('img_profile');
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
        Schema::dropIfExists('principales');
    }
};
