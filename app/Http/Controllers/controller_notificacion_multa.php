<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\CONSULTAS\ert_notificacion_multa;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Hash;

class controller_notificacion_multa extends Controller
{
    public function notificacion_multa(Request $request){
        try{
            $request = ert_notificacion_multa::select('numero', 'numero_tarjeta','numero_placa','calle_principal', 'calle_transversal', 'fecha', 
            'hora', 'tipo_contravencion_a', 'tiempo_permanencia', 'supervisor_responsable', 'estado','observacion','valor_tiempo',
            'inmovilizado','imagen1','imagen2','imagen3','estado_rev','latitud','longitud')
            ->get();

            return response()->json([
                "data" => $request,
                "message" => "Succesfully Retrieved Comprobantes Cancelados",
                "status" => 200
            ], 200);
        }catch (Exception $ex) {
            return response()->json([
                "message" => $ex,
            ]);
        }
    }

  public function registersismert(Request $request)
    {
        //validate fields
        $attrs = $request->validate([
            'numero' => 'required|string',
            'numero_tarjeta' => 'required|string',
            'numero_placa' => 'required|string',
            'calle_principal' => 'required|string',
            'calle_transversal' => 'required|string',
            'fecha' => 'nullable|date',
            'hora' => 'required',
            'tipo_contravencion_a' => 'required',
            'tiempo_permanencia' => 'required',
            'supervisor_responsable' => 'required|string',
            'estado' => 'required|string',
            'observacion' => 'required|string',
            'valor_tiempo' => 'required',
            'inmovilizado' => 'required|string',
            'imagen1' => 'required',
            'imagen2' => 'required',
            'imagen3' => 'required',
            'estado_rev' => 'required|string',
            'latitud' => 'required|string',
            'longitud' => 'required|string'
        ]);

        //create user
        $user = ert_notificacion_multa::create([
            'numero' => $attrs['numero'],
            'numero_tarjeta' => $attrs['numero_tarjeta'],
            'numero_placa' => $attrs['numero_placa'],
            'calle_principal' => $attrs['calle_principal'],
            'calle_transversal' => $attrs['calle_transversal'],
            'fecha' => $attrs['fecha'],
            'hora' => $attrs['hora'],
            'tipo_contravencion_a' => $attrs['tipo_contravencion_a'],
            'tiempo_permanencia' => $attrs['tiempo_permanencia'],
            'supervisor_responsable' => $attrs['supervisor_responsable'],
            'estado' => $attrs['estado'],
            'observacion' => $attrs['observacion'],
            'valor_tiempo' => $attrs['valor_tiempo'],
            'inmovilizado' => $attrs['inmovilizado'],
            'imagen1' => $attrs['imagen1'],
            'imagen2' => $attrs['imagen2'],
            'imagen3' => $attrs['imagen3'],
            'estado_rev' => $attrs['estado_rev'],
            'latitud' => $attrs['latitud'],
            'longitud' => $attrs['longitud']
        ]);

        return response()->json([
            "data" => $request,
            "message" => "Succesfully Retrieved Comprobantes Cancelados",
            "status" => 200
        ], 200);
 
    }  

}