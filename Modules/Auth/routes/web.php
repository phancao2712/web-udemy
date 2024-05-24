<?php
use Illuminate\Support\Facades\Route;

Route::group([
    'namespace' => 'Modules\Auth\src\Http\Controllers\Admin',
    'middleware' => 'web'
], function() {
    Route::get('/login', 'LoginController@showLoginForm')->name('login');
    Route::post('/login', 'LoginController@login')->name('login');
    Route::post('/logout', 'LoginController@logout')->name('logout');
});
