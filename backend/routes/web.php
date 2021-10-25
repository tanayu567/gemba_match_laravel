<?php

Route::get('/', 'HomeController@index')->name('home');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('multi_login', [\App\Http\Controllers\MultiAuthController::class, 'showLoginForm']);
Route::post('multi_login', [\App\Http\Controllers\MultiAuthController::class, 'login']);

Route::get('multi_login/logout', [\App\Http\Controllers\MultiAuthController::class, 'logout']);

Route::prefix('workers')->middleware('auth:workers')->group(function(){
    Route::get('dashboard', function(){ return '職人でログイン完了'; });
});
Route::prefix('companies')->middleware('auth:companies')->group(function(){
    Route::get('dashboard', function(){ return '事業所でログイン完了'; });
});

