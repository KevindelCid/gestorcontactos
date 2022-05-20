<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Personaslls extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personaslls', function (Blueprint $table) {
            $table->bigIncrements('id_worker');
            $table->string('correlativo')->nulleable();
            $table->string('nombre_trabajador')->nulleable();
            $table->string('sexo')->nullable();
            $table->string('dpi')->nullable();
            $table->string('departamento');
            $table->string('municipio')->nulleable();
            $table->string('aldea_barrio_ref')->nulleable();
            $table->string('telefonos')->nulleable();
            $table->string('pasaporte_vigente')->nulleable();
            $table->string('esquema_vacunas')->nulleable();
            $table->string('ingreso')->nulleable();
            $table->string('pago')->nulleable();
            $table->string('estado')->nulleable();
            $table->string('nota')->nulleable();
            $table->string('modificacion')->nulleable();
            $table->string('fecha_ingreso')->nulleable();
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
        Schema::dropIfExists('personaslls');
    }
}
