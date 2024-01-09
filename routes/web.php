<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\PetsController;
use App\Http\Controllers\PetsAdminController;
use App\Http\Controllers\SolicitanteController;
use Illuminate\Support\Facades\Route;

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
    return view('index');
})->name('home');

Route::get('/queroadotar', [PetsController::class, 'RetornaPets'])->name('queroadotar');

Route::get('/adotar/{id}/{nome}', [PetsController::class, 'mostrar'])->name('adotar');

Route::prefix('formulario')->group(function () {
    Route::get('/{id}/{nome}', [SolicitanteController::class, 'index'])->name('formulario');
    Route::get('/enviar', [SolicitanteController::class, 'create'])->name('formulario-create');
    Route::post('/', [SolicitanteController::class, 'store'])->name('formulario-store');
});


Route::prefix('cadastrar')->group(function () {
    Route::get('/', [PetsAdminController::class, 'index'])->name('cadastrar')->middleware('auth');
    Route::get('/create', [PetsAdminController::class, 'create'])->name('cadastrar-create')->middleware('auth');
    Route::post('/', [PetsAdminController::class, 'store'])->name('cadastrar-store')->middleware('auth');
});

Route::prefix('painel')->group(function () {
    Route::get('/', [PetsAdminController::class, 'painelPets'])->name('painel')->middleware('auth');
    Route::get('/solicitantes', [SolicitanteController::class, 'painelSolicitacoes'])->name('painel-solicitacoes')->middleware('auth');
    Route::get('/solicitantes/{id}', [SolicitanteController::class, 'buscarSolicitacao'])->name('buscar-solicitacao')->middleware('auth');
    Route::get('/exportar-solicitacoes', [SolicitanteController::class, 'export'])->name('export-solicitacoes')->middleware('auth');
    Route::get('/solicitantes/filtrar', [SolicitanteController::class, 'filtrarSolicitantes'])->name('solicitantes-filtrar')->middleware('auth');
    Route::get('/filtrar', [PetsAdminController::class, 'filtrar'])->name('painel-filtrar')->middleware('auth');
    Route::get('/recuperarsenha', [PetsAdminController::class, 'recuperarSenha'])->name('painel-recuperarsenha');
    Route::post('/recuperarsenha', [PetsAdminController::class, 'recuperarSenhaGerarToken'])->name('painel-recuperarsenha');
    Route::post('/recuperarsenhatoken', [PetsAdminController::class, 'recuperarSenhaToken'])->name('recuperarsenhatoken');
    Route::get('/recuperarsenhanova', [PetsAdminController::class, 'criarNovaSenha'])->name('recuperar-novasenha');
    Route::post('/recuperarsenhanova', [PetsAdminController::class, 'alterarSenha'])->name('recuperar-novasenha');
    Route::get('/{id}/editar', [PetsAdminController::class, 'edit'])->where('id', '[0-9]+')->name('painel-editar')->middleware('auth');
    Route::put('/{id}', [PetsAdminController::class, 'update'])->where('id', '[0-9]+')->name('painel-update')->middleware('auth');
    Route::delete('/{id}', [PetsAdminController::class, 'destroy'])->where('id', '[0-9]+')->name('painel-destroy')->middleware('auth');
    
});

Route::view('/login', 'login')->name('login.form');
Route::post('/auth', [LoginController::class, 'auth'])->name('login.auth');
Route::get('/logout', [LoginController::class,'logout'])->name('login.logout');

