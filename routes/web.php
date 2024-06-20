<?php

use App\Http\Controllers\CandidatoController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\VagaController;
use Illuminate\Support\Facades\Route;
Route::get('/', [CandidatoController::class, 'index'])->name('index');
Route::get('/success', [CandidatoController::class, 'returnSuccess'])->name('success');
Route::get('/error', [CandidatoController::class, 'returnError'])->name('error');
Route::get('/login', function () {return view('admin.signin');})->name('login-form');
Route::group(["prefix" => "Admin"], function () {

    Route::get('/', [HomeController::class, 'index'])->middleware(['auth', 'verified'])->name('home');
    
    Route::group(["prefix" => "Vagas"], function () {
        Route::get('/', [VagaController::class, 'index'])->middleware(['auth', 'verified'])->name('vagas');
        Route::get('/adicionar', [VagaController::class, 'create'])->middleware(['auth', 'verified'])->name('show-form-to-create');
        Route::get('/editar/{id}', [VagaController::class, 'edit'])->middleware(['auth', 'verified'])->name('show-form-to-edit');
        Route::get('/deletar/{id}',[VagaController::class, 'destroy'])->middleware(['auth', 'verified'])->name('destroy-vaga');
        Route::post('/update', [VagaController::class, 'update'])->middleware(['auth', 'verified'])->name('update-vaga');
        Route::post('/create', [VagaController::class, 'store'])->middleware(['auth', 'verified'])->name('create');
    });

    Route::group(["prefix" => "Candidatos"], function () {
        Route::get('/{vaga}', [CandidatoController::class, 'getCandidatosBySlug'])->middleware(['auth', 'verified'])->name('candidatos');
        Route::get('/}', function () {return view('admin.curriculos');})->middleware(['auth', 'verified'])->name('curriculos');

        Route::post('/cadastrar', [CandidatoController::class, 'store'])->name('cadastrar-candidato');
    });
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
