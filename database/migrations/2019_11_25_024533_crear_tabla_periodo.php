<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrearTablaPeriodo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('periodo', function (Blueprint $table) {
            $table->increments('id');
            $table->string('observacion_periodo',200)->nullable();
            $table->string('nombre_director_periodo',200);
            $table->unsignedInteger('agno_periodo');
            $table->boolean('flag_periodo');
            $table->unsignedInteger('tipo_periodo');
            $table->unsignedInteger('tipo_comportamiento');
            $table->unsignedInteger('tipo_asistencia');
            $table->unsignedInteger('tipo_calificacion_comportamiento');
            $table->boolean('comentario_tutor_periodo');
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
        Schema::dropIfExists('periodo');
    }
}
