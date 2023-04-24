<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\sufragantesController;
use App\Http\Controllers\usuariosController;
use App\Models\Sufragantes;
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
    return view('principal');
});

Route::controller(sufragantesController::class)->group(function () {
    Route::get('/sufragantes-listar', 'index')->name('user.listar');

    Route::get('/sufragantes-agregar', 'mostrarForm')->name('user.mostrar');

    Route::post('/sufragantes-agregar', 'insertar')->name('user.crear');

    Route::get('/sufragantes/{id}/editar', 'edit')->name('user.edit');

    Route::put('/sufragantes/{id}/actualizar', 'update')->name('user.update');

    Route::delete('/sufragantes/{id}/eliminar', 'destroy')->name('user.destroy');
});


Route::controller(usuariosController::class)->group(function () {
    Route::get('/usuarios', 'index')->name('us.listar');

    Route::get('/usuarios-agregar', 'mostrar')->name('us.mostrar');

    Route::post('/usuarios-agregar', 'crear')->name('us.crear');

    Route::get('/usuarios/{id}/editar', 'edit')->name('us.edit');

    Route::put('/usuarios/{id}/actualizar', 'update')->name('us.update');

    Route::delete('/usuarios/{id}/eliminar', 'destroy')->name('us.destroy');
});
