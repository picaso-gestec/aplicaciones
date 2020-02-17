<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrearTablaPgstMaeMeses extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pgst_mae_meses', function (Blueprint $table) {
            $table->bigIncrements('id')->comment('Código mes');
            $table->string('des_mes',10)->comment('Descripcion mes');
            $table->string('log_usuario',50)->comment('Código usuario que crea el registro');
            $table->dateTime('log_fechahora',0)->comment('Fecha-Hora que crea el registro');
            $table->string('log_terminal',50)->comment('Terminal donde se crea el registro');
            $table->engine = 'InnoDB';
            $table->charset = 'uutf8mb4';
            $table->collation = 'utf8mb4_spanish2_ci';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pgst_mae_meses');
    }
}
