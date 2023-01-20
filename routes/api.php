<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\controllerLogin;
use App\Http\Controllers\controller_notificacion_multa;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::post('/loginsismert', [controllerLogin::class,'loginsismert']);
Route::get('/registersismert', [controller_notificacion_multa::class,'registersismert']);
Route::post('/notificacion_multa', [controller_notificacion_multa::class,'notificacion_multa']);