<?php

use App\Http\Controllers\WorkerDashboardController;
use App\Http\Controllers\CompanyDashboardController;
use App\Http\Controllers\Auth\WorkerLoginController;
use App\Http\Controllers\Auth\CompanyLoginController;
use Illuminate\Support\Facades\Route;

// Route::get('/', 'HomeController@index')->name('home');
Route::get('/', function () {
    return view('welcome');
});

Route::prefix('worker')->group(function () {
    Route::get('login', [WorkerLoginController::class, 'create'])->name('worker.login');
    Route::post('login', [WorkerLoginController::class, 'store']);

    Route::middleware('auth:worker')->group(function () {
        Route::get('dashboard', [WorkerDashboardController::class, 'index']);
    });
});

Route::prefix('company')->group(function () {
    Route::get('login', [CompanyLoginController::class, 'create'])->name('company.login');
    Route::post('login', [CompanyLoginController::class, 'store']);

    Route::middleware('auth:company')->group(function () {
        Route::get('dashboard', [CompanyDashboardController::class, 'index']);
    });
});

Route::middleware(['auth:web', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

