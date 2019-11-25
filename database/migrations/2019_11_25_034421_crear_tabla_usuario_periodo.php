<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrearTablaUsuarioPeriodo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuario_periodo', function (Blueprint $table) {
            $table->increments('id');

            $table->unsignedInteger('usuario_id');
            $table->foreign('usuario_id','fk_usuarioperiodo_usuario')->references('id')->on('usuario')->onDelete('restrict')->onUpdate('restrict');
          
            $table->unsignedInteger('periodo_id');
            $table->foreign('periodo_id','fk_periodousuario_periodo')->references('id')->on('periodo')->onDelete('restrict')->onUpdate('restrict');
           
            $table->date('fecha_periodo');
            $table->boolean('estado_usuario_periodo');

           

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
        Schema::dropIfExists('usuario_periodo');
    }
}
