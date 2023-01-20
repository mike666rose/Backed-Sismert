<?php

namespace App\Models\CONSULTAS;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ert_notificacion_multa extends Model
{
    use HasFactory;


    protected $table = 'sismert.ert_notificacion_multa';

    protected $fillable = [
        'numero',
        'numero_tarjeta',
        'numero_placa',
        'calle_principal',
        'calle_transversal',
        'fecha',
        'hora',
        'tipo_contravencion_a',
        'tiempo_permanencia',
        'supervisor_responsable',
        'estado',
        'observacion',
        'valor_tiempo',
        'inmovilizado',
        'imagen1',
        'imagen2',
        'imagen3',
        'estado_rev',
        'latitud',
        'longitud'
    ];
}