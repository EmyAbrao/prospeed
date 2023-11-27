<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PilotController;
use App\Http\Controllers\RaceTrackController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\SessionTypeController;
use App\Http\Controllers\ProfileController;




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
    //return view('welcome');
    return view ('content.pages.pages-home');
});
Route::get('/prospeed', function() {
    //return view('prospeed');
    return view ('content.pages.pages-home');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('prospeed/perfil/editar', [ProfileController::class, 'edit'])->name('editar.perfil');
    Route::patch('prospeed/perfil/editar', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('prospeed/perfil/editar', [ProfileController::class, 'destroy'])->name('profile.destroy');    
    Route::get('prospeed/pilotos', [PilotController::class, 'listaPilotos']);
    Route::get('prospeed/pistas',[RaceTrackController::class, 'listaPistas']);
    Route::get('prospeed/carros', [CarController::class, 'listaCarros']);
    Route::get('prospeed/eventos', [EventController::class, 'listaEventos']);
    Route::get('prospeed/sessoes', [SessionController::class, 'listaSessoes']);
    Route::get('prospeed/tipo-sessoes', [SessionTypeController::class, 'listaTipoSessoes']);
    Route::get('prospeed/pilotos/{id}/detalhes', [PilotController::class, 'detalhesPiloto'])->name('piloto.detalhes');
    Route::get('prospeed/pilotos/{id}/editar', [PilotController::class, 'editarPiloto'])->name('piloto.editar');
    Route::get('prospeed/pilotos/{id}/excluir', [PilotController::class, 'destroy'])->name('excluir.piloto');
});

require __DIR__.'/auth.php';