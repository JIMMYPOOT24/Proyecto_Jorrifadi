<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDatosempresaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datosempresa', function (Blueprint $table) {
            $table->id();
            $table->string('descripcion');
            $table->string('mision');
            $table->string('vision');
            $table->string('urllogo');
            $table->string('slogan');
            $table->string('url_curriculum');
            $table->string('icon_mision');
            $table->string('icon_vision');
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
        Schema::dropIfExists('datosempresa');
    }
}
