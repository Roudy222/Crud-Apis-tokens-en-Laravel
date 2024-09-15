<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\EstablecimientoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});




Route::post('/v1/register', [AuthController::class, 'register']);
Route::post('/v1/login', [AuthController::class, 'login']);
// Porteger ruta con autenticación group
Route::middleware('auth:sanctum')->group(function () {
    Route::get('/v1/establecimientos', [EstablecimientoController::class, 'index']);
    Route::get('/v1/establecimiento/{establecimiento}', [EstablecimientoController::class, 'show']);
    Route::post('/v1/establecimientos', [EstablecimientoController::class, 'store']);
    Route::put('/v1/establecimiento/{establecimiento}', [EstablecimientoController::class, 'update']);
    Route::delete('/v1/establecimientos/{establecimiento}', [EstablecimientoController::class, 'destroy']);
    Route::post('/v1/logout', [AuthController::class, 'logout']);
});
