<?php

use App\Http\Controllers\WorkerDashboardController;
use App\Http\Controllers\CompanyDashboardController;
use App\Http\Controllers\Auth\WorkerLoginController;
use App\Http\Controllers\Auth\CompanyLoginController;
use App\Http\Controllers\Auth\WorkerRegisterController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WorkerController;
use Illuminate\Support\Facades\Route;
use App\Models\User;

// Route::get('/', 'HomeController@index')->name('home');
Route::get('/', function () {
    return view('welcome');
});

Route::prefix('worker')->group(function () {
    Route::get('login', [WorkerLoginController::class, 'create'])->name('worker.login');
    Route::post('login', [WorkerLoginController::class, 'store']);

    Route::get('register', [WorkerRegisterController::class, 'create'])->name('worker.register');
    Route::post('register', [WorkerRegisterController::class, 'store']);

    Route::get('/worker/{id}', [WorkerController::class, 'show'])->name('workers.profile');

    Route::middleware('auth:worker')->group(function () {
        Route::get('dashboard', [WorkerDashboardController::class, 'index']);
    });
});


Route::middleware(['auth:web', 'verified'])->get('/dashboard', function () {
    $users = User::all();

    return view('dashboard', ['users' => $users,]);
})->name('dashboard');

Route::get('/user/{id}', [UserController::class, 'show'])->name('users.profile');

