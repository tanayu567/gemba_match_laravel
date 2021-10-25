<?php

use App\Http\Controllers\WorkerDashboardController;
use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;

// Route::get('/', 'HomeController@index')->name('home');
Route::get('/', function () {
    return view('welcome');
});

Route::prefix('worker')->group(function () {
    Route::get('login', [LoginController::class, 'create'])->name('worker.login');
    Route::post('login', [LoginController::class, 'store']);

    Route::middleware('auth:worker')->group(function () {
        Route::get('dashboard', [WorkerDashboardController::class, 'index']);
    });
});

Route::middleware(['auth:web', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

