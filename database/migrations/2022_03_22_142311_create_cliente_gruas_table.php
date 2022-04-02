<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClienteGruasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cliente_gruas', function (Blueprint $table) {
            $table->id();
            /*Datos De Contacto**/
            $table->string('Nom_empresa');
            $table->string('Direccion');
            $table->string('Contacto');
            $table->string('Telefono');
            $table->string('Sucursal');
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
        Schema::dropIfExists('cliente_gruas');
    }
}
