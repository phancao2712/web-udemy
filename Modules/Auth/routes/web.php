<?php

use Illuminate\Support\Facades\Route;
use Modules\Auth\src\Http\Controllers\Client\LoginController;
use Modules\Auth\src\Http\Controllers\Admin\LoginController as AdminLoginController;
use Modules\Auth\src\Http\Controllers\Client\RegisterController;


Route::get('/login', [AdminLoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AdminLoginController::class, 'login'])->name('login');
Route::post('/logout', [AdminLoginController::class, 'logout'])->name('logout');

Route::group(['as'=> 'client.'], function () {
    Route::get('dang-nhap',[LoginController::class,'showLoginForm'])->name('login');
    Route::post('dang-nhap',[LoginController::class,'login']);

    Route::get('dang-ki',[RegisterController::class,'showRegisterForm'])->name('register');
    Route::post('dang-ki',[RegisterController::class,'register']);

    Route::get('logout', [LoginController::class,'logout'])->name('logout');
});