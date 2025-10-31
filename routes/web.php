<?php

use App\Http\Controllers\Auth\AuthController;
use Illuminate\Support\Facades\Route;

/**
 *  @guest routes
 */
Route::get('/', function () {
    echo 'not logged in!!';
})->name('home');

Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('/login', [AuthController::class, 'store'])->name('login.store');

/**
 *  @auth routes
 */
Route::middleware(['auth'])->group(function () {
    Route::get('/logout', [AuthController::class, 'submit'])->name('login.logout');
});
