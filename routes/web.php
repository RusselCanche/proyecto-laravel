<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\RolController;
use App\Http\Controllers\PersonalController;
use App\Http\Controllers\ProyectoController;
use App\Http\Controllers\Actividad_ProyectoController;
use App\Http\Controllers\Actividad_PersonalController;

use App\Http\Controllers\RegistroController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\PasswordController;
/* ¿Agregar StatusController y PrioridadController? */
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
    return redirect('/inicio');
});
/* REGISTRO */
Route::get('/registrar',  [RegistroController::class, 'show']);
Route::post('/registrar', [RegistroController::class, 'register']);
/* LOGIN */
Route::get('/login',[LoginController::class, 'show']);
Route::post('/login',[LoginController::class, 'login']);
/* INICIO/PAGINA PRINCIPAL */
Route::get('/inicio',[InicioController::class, 'index']);
Route::get('/logout',[LogoutController::class, 'logout']);
//Route::resource('/usuario', UsuarioController::class);
Route::resource('/rol', RolController::class);
Route::resource('/personal', PersonalController::class);
Route::resource('/proyecto', ProyectoController::class);
Route::resource('/personal/auxiliar', PasswordController::class);
Route::resource('/actividades', Actividad_ProyectoController::class);
Route::get('/proyecto/{proyecto}/actividades', [Actividad_ProyectoController::class, 'indexProyecto']);
Route::resource('/asignaciones', Actividad_PersonalController::class);