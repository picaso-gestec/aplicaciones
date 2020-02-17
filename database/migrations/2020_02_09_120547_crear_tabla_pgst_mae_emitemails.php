<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrearTablaPgstMaeEmitemails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pgst_mae_emitemails', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('cod_servidor',10)->unique()->comment('Código servidor');
            $table->string('des_servidor',30)->comment('Descripcion servidor');
            $table->integer('nro_puerto',5)->comment('Número puerto de envío del email');
            $table->string('cod_certificado',10)->comment('Código certificado de seguridad para envío de emails');
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
        Schema::dropIfExists('pgst_mae_emitemails');
    }
}
