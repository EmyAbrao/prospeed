<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PilotController;
use App\Http\Controllers\RaceTrackController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\SessionTypeController;
use App\Http\Controllers\IntegrationController;


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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('pilotos', [PilotController::class, 'index']);

Route::get('pistas', [RaceTrackController::class, 'index']);

Route::get('carros', [CarController::class, 'index']);

Route::get('eventos', [EventController::class, 'index']);

Route::get('sessoes', [SessionController::class, 'index']);

Route::get('tipo-sessoes', [SessionTypeController::class, 'index']);

Route::post('integration', [IntegrationController::class, 'integration']);
