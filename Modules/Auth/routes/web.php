<?php

use Illuminate\Support\Facades\Route;
use Modules\Auth\src\Http\Controllers\LoginController;

    Route::get('/login', 'Admin\LoginController@showLoginForm')->name('login');
    Route::post('/login', 'Admin\LoginController@login')->name('login');
    Route::post('/logout', 'Admin\LoginController@logout')->name('logout');

