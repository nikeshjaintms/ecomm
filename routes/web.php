<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('backend/index');
});

Route::group(['prefix' => '/admin'], function () {
    Route::controller(App\Http\Controllers\AdminController::class)->group(function () {
        Route::get('/', 'index')->name('admin.index');
        Route::post('/login', 'login');

    });
  


});