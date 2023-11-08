<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PilotController;
use App\Http\Controllers\RaceTrackController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\SessionTypeController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');

});
Route::get('/prospeed', function() {
    return view('prospeed');
});
Route::get('prospeed/pilotos', [PilotController::class, 'listaPilotos']);
Route::get('prospeed/pistas',[RaceTrackController::class, 'listaPistas']);
Route::get('prospeed/carros', [CarController::class, 'listaCarros']);
Route::get('prospeed/eventos', [EventController::class, 'listaEventos']);
Route::get('prospeed/sessoes', [SessionController::class, 'listaSessoes']);
Route::get('prospeed/tipo-sessoes', [SessionTypeController::class, 'listaTipoSessoes']);
Route::get('prospeed/pilotos/{id}/detalhes', [PilotController::class, 'detalhesPiloto']);
Route::get('prospeed/pilotos/{id}/editar', [PilotController::class, 'editarPiloto']);