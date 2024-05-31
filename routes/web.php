<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\EstablecimientoController;
use App\Http\Controllers\EventoController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
/*
Route::get('/', function () {
    return view('main-page/home');
});
*/
Route::get('/', [AuthController::class, 'inicio'])->name('inicio');

/*
Route::get('/login', [AuthController::class, 'login'])->name('login');

Route::prefix('usuario')->group(function(){
    Route::post('/create',[UsuarioController::class, 'store'])->name('c.usuario');
    Route::get('/show',[UsuarioController::class, 'show'])->name('r.usuario');
    Route::post('/update',[UsuarioController::class, 'update'])->name('u.usuario');
    Route::get('/destroy',[UsuarioController::class, 'destroy'])->name('d.usuario');
});

Route::prefix('establecimiento')->group(function(){
    Route::post('/create',[EstablecimientoController::class, 'store'])->name('c.establecimiento');
    Route::get('/index',[EstablecimientoController::class, 'index'])->name('r.establecimiento');
    Route::post('/update',[EstablecimientoController::class, 'update'])->name('u.establecimiento');
    Route::get('/destroy',[EstablecimientoController::class, 'destroy'])->name('d.establecimiento');
});

Route::prefix('evento')->group(function(){
    Route::post('/create',[EventoController::class, 'store'])->name('c.evento');
    Route::get('/index',[EventoController::class, 'index'])->name('r.evento');
    Route::post('/update',[EventoController::class, 'update'])->name('u.evento');
    Route::get('/destroy',[EventoController::class, 'destroy'])->name('d.evento');
});
*/