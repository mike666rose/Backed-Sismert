<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\CONSULTAS\adm_usuario;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Hash;


class controllerLogin extends Controller
{
    public function loginsismert(Request $request)
    {
        $user = adm_usuario::select('us_login','us_contrasenia','us_estado')
         ->where('us_login',$request->us_login)
         ->where('us_estado','=','V')
            /////->where('us_contrasenia','=', md5($request->us_contrasenia))
            ->first();


            if ($user->us_contrasenia  === md5($request->us_contrasenia)) 

             return response()->json([
                "data" => $user,
                "message" => "Succesfully Retrieved Comprobantes Cancelados",
                "status" => 200
            ], 200);
            
        }
        
        }


