<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGruasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gruas', function (Blueprint $table) {
            $table->id();
            $table->string('id_cliente');
            $table->string('Marca');
            $table->string('Modelo');
            $table->string('N_serie');
            $table->string('Area');
            $table->string('Recorrido');
            $table->string('Claro');
            $table->string('Altura');
            $table->string('Capacidad');
            $table->string('Voltaje');
            $table->string('Responsable');
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
        Schema::dropIfExists('gruas');
    }
}
