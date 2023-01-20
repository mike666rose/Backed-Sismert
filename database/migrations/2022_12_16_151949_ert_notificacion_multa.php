<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create("sismert.ert_notificacion_multa", function (Blueprint $table) {
            $table->string('numero');
            $table->string('numero_tarjeta');
            $table->string('numero_placa');
            $table->string('calle_principal');
            $table->string('calle_transversal');
            $table->string('fecha');
            $table->string('hora');
            $table->string('tipo_contravencion_a');
            $table->string('tiempo_permanencia');
            $table->string('supervisor_responsable');
            $table->string('estado');
            $table->string('observacion');
            $table->string('valor_tiempo');
            $table->string('inmovilizado');
            $table->string('imagen1');
            $table->string('imagen2');
            $table->string('imagen3');
            $table->string('estado_rev');
            $table->string('latitud');
            $table->string('longitud');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
