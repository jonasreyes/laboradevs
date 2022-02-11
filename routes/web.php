<?php

use App\Http\Controllers\CandidatoController;
use App\Http\Controllers\NotificacionesController;
use App\Http\Controllers\VacanteController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Auth::routes(['verify' => true]);

// Ruta de Home
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Rutas autenticads y verificadas. (estilo para Laravel 8)
Route::middleware(['auth', 'verified'])->group(function () {
  Route::get('/vacantes', [VacanteController::class, 'index'])->name('vacantes.index');
  Route::get('/vacantes/create', [VacanteController::class, 'create'])->name('vacantes.create');
  Route::post('/vacantes', [VacanteController::class, 'store'])->name('vacantes.store');

  // Subir imágenes
  Route::post('/vacantes/imagen', [VacanteController::class, 'imagen'])->name('vacantes.imagen');
  Route::post('/vacantes/borrarimagen', [VacanteController::class, 'borrarimagen'])->name('vacantes.borrar');

  // Panel de Notificaciones
  Route::get('/notificaciones', NotificacionesController::class)->name('notificaciones');
});

Route::get('/candidatos', [CandidatoController::class, 'index'])->name('candidatos.index');
Route::post('/candidatos/store', [CandidatoController::class, 'store'])->name('candidatos.store');

// Rutas de Vacantes publica (No se requiera esta autenticado ni verificado)
Route::get('/vacantes/{vacante}', [VacanteController::class, 'show'])->name('vacantes.show');
