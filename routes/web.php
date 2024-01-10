<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\RolController;
//Ruta para tener acceso a la clase del controlador UsuarioController
use App\Http\Controllers\UsuarioController;
//Ruta para tener acceso a la clase del controlador UsuarioController
use App\Http\Controllers\DashboardController;

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


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('docentes', App\Http\Controllers\DocenteController::class);
Route::resource('grados', App\Http\Controllers\GradoController::class);
Route::resource('asistencias', App\Http\Controllers\AsistenciaController::class);

Route::resource('firmas', App\Http\Controllers\FirmaController::class);
Route::resource('ayudas', App\Http\Controllers\AyudaController::class);

//Rutas para crud usuario y roles
Route::resource('/usuarios', UsuarioController::class);
Route::resource('/roles', RolController::class);
