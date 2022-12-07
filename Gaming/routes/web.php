<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControladorPagina;
use App\Http\Controllers\controladorBD;

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

/*Route::get('/', function () {
    return view('welcome');
});
*/


Route::get('/',[ControladorPagina::class,'fFormulario'])->name('NFormulario');
Route::get('/consulta',[ControladorPagina::class,'fConsulta'])->name('NConsulta');

Route::post('/GuardarFormulario',[ControladorPagina::class, 'procesarFormulario'])->name('NProcesar');

Route::get('/recuerdo/{id]destroy',[controladorBD::class, 'destroy'])->name('recuerdo.destroy');
