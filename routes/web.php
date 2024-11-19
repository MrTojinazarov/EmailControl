<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\EmailVerificationController;
use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

Route::get('login', [AuthController::class, 'login'])->name('login.page');
Route::get('register', [AuthController::class, 'register'])->name('register.page');
Route::post('register', [AuthController::class, 'store'])->name('register.store');
Route::get('verify', [EmailVerificationController::class, 'sendcode'])->name('verified.page');

Route::middleware(['check'])->group(function () {
    Route::get('/', [MainController::class, 'index'])->name('main.page');
});