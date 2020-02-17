<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrearTablaPgstTipUsuarios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pgst_tip_usuarios', function (Blueprint $table) {
            $table->bigIncrements('id')->comment('Código usuario');
            $table->string('des_tipusuario',30)->comment('Descripcion usuario');
            $table->enum('ind_estado',['ACTIVO','INACTIVO'])->comment('Estado del usuario dentro del sistema');
            $table->string('usu_creacion',50)->comment('Código usuario que crea el registro');
            $table->dateTime('fec_creacion',0)->comment('Fecha-Hora que crea el registro');
            $table->string('tty_creacion',50)->comment('Terminal donde se crea el registro');
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
        Schema::dropIfExists('pgst_tip_usuarios');
    }
}
