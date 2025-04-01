<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\DashboardController;
use App\Http\Controllers\LoginController;

Route::get('/', function () {
    return view('index');
})->name('index');


Route::name('user.')->group(function () 
{
    Route::get('login', [LoginController::class, 'login'])->name('login');
    Route::get('dashboard', [DashboardController::class, 'show'])->name('dashboard')
    ->middleware('auth');
});
    