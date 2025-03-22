<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\DashboardController;

Route::get('/', function () {
    return view('index');
})->name('index');


Route::name('user.')->group(function () 
{
    Route::get('dashboard', [DashboardController::class, 'show'])->name('dashboard');
});
    