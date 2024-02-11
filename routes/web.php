<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PilotController;
use App\Http\Controllers\RaceTrackController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\SessionTypeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SimulatorController;





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
    Route::get('prospeed/carros/{id}/excluir', [CarController::class, 'destroy'])->name('excluir.carro');
    Route::get('prospeed/eventos/{id}/excluir', [EventController::class, 'destroy'])->name('excluir.evento');
    Route::get('prospeed/pistas/{id}/excluir', [RaceTrackController::class, 'destroy'])->name('ecluir.pista');
    Route::get('prospeed/sessoes/{id}/excluir', [SessionController::class, 'destroy'])->name('excluir.sessao');
    Route::get('prospeed/tipo-sessoes/{id}/excluir', [SessionTypeController::class, 'destroy'])->name('exluir.modalidade');
    Route::get('prospeed/carros/{id}/detalhes', [CarController::class, 'show'])->name('carros.detalhes');
    Route::get('prospeed/simuladores', [SimulatorController::class, 'simuladoresAgora'])->name('jogadores.online');
});

require __DIR__.'/auth.php';