<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ReservationController;

Route::get('/', [ReservationController::class, 'index'])->name('home');
Route::get('/reservation', [ReservationController::class, 'create'])->name('reservation');
