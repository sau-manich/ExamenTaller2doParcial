<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDireccionesEnviosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('direcciones_envios', function (Blueprint $table) {
            $table->increments('idDireccionesEnvio');
            $table->integer('numero');
            $table->string('calle', 50);
            $table->integer('columna');
            $table->string('ciudad', 30);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('direcciones_envios');
    }
}
