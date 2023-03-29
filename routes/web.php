<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\sufragantesController;
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

Route::controller(sufragantesController::class)->group(function(){
    Route::get('/sufragantes-listar','index');

    Route::get('/sufragantes-agregar', 'mostrarForm');

    Route::post('/sufragantes-agregar', 'insertar');

    Route::get('/sufragantes/{id}/editar', 'edit');
});




