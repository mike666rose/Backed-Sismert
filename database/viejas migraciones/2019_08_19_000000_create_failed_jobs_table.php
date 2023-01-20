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
        Schema::create('sismert.ert_notificacion_multa', function (Blueprint $table) {
            $table->id();
            $table->int4('numero');
            $table->varchar('numero_tarjeta');
            $table->varchar('numero_placa');
            $table->varchar('calle_principal');
            $table->varchar('calle_transversal');
            $table->text('fecha');
            $table->text('hora');
            $table->varchar('tipo_contravencion_a');
            $table->int4('tiempo_permanencia');
            $table->varchar('supervisor_responsable');
            $table->varchar('estado');
            $table->text('observacion');
            $table->numeric('valor_tiempo');
            $table->bool('inmovilizado');
            $table->varchar('imagen1');
            $table->varchar('imagen2');
            $table->varchar('imagen3');
            $table->varchar('estado_rev');
            $table->varchar('latitud');
            $table->varchar('longitud');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sismert.ert_notificacion_multa');
    }
};
