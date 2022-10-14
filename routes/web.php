<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CaminhaoController;
use App\Http\Controllers\listarCarro;
use App\Http\Controllers\CadastrarCaminhaoController;
use App\Http\Controllers\motoController;
use App\Http\Controllers\ControllerCarro2;
use App\Http\Controllers\CarrosController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|


Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/home',[HomeController::class,'mostrar'])->name('home');

Route::get('/editarCaminhao',[CaminhaoController::class,'Editar'])->name('editar-caminhao');

Route::get('/cadastrarCaminhao',[CaminhaoController::class,'FormularioCadastro'])->name('cadastrar-caminhao');

Route::post('/cadastrarCaminhao',[CaminhaoController::class,'SalvarBanco'])->name('salvar-banco');

Route::get('/listarMotos',[motoController::class,'mostrar']);

Route::get('/listarCarro2',[ControllerCarro2::class,'mostrar']);

Route::get('/cadastrarCaminhao',[CadastrarCaminhaoController::class,'MostrarCadastroCaminhao']);

Route::get('/listarCarro',[listarCarro::class,'lista']);

Route::get('/cadastrarCarro',[CarrosController::class,'FormularioCadastroCarro'])->name('cadastrar-carro');

Route::get('/editarCarro',[CarrosController::class,'EditarCarro'])->name('editar-carro');

Route::post('/cadastrarCarro',[CarrosController::class,'SalvarBancoCarro'])->name('salvar-banco-carro');



