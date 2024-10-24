<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PacienteController;
use App\Http\Controllers\AvaliacaoPsicologicaController;
use App\Http\Controllers\AgendamentoController;
use App\Http\Controllers\DiagnosticoController;
use App\Http\Controllers\EncaminhamentoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::resource("pacientes", PacienteController::class);
    Route::resource("avaliacao", AvaliacaoPsicologicaController::class);
    Route::resource('agendamento', AgendamentoController::class);
    Route::resource('diagnostico', DiagnosticoController::class);
    Route::resource('/encaminhamento', EncaminhamentoController::class);
});

require __DIR__.'/auth.php';
