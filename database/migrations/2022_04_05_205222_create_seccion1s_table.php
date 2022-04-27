<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSeccion1sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seccion1s', function (Blueprint $table) {
            $table->id();
            $table->string('id_equipo');
            $table->string('Folio');
            $table->string('Fecha');
            $table->string('status');
            $table->string('comentario');
            // $table->unsignedBigInteger('sub_seccion_id');
            // $table->foreign('sub_seccion_id')->references('id')->on('subsecciones')->onDelete('cascade');
            $table->string('nombre_subseccion');

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
        Schema::dropIfExists('seccion1s');
    }
}
