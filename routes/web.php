<?php

use App\Http\Controllers\DiaController;
use App\Http\Controllers\ReservaController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Route::post('/reservas/{dia}/{tramo}', [ReservaController::class, 'store'])->name('reservas.store');
Route::resource('dias', DiaController::class);
Route::resource('reservas', ReservaController::class);


require __DIR__.'/auth.php';
