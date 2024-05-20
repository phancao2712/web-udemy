<?php

use Illuminate\Support\Facades\Route;
use Modules\User\src\Http\Controllers\UserController;

Route::group([
    'namespace' => 'Modules\User\src\Http\Controllers',
    'prefix' => 'admin',
    'as' => 'admin.',
    'middleware' => 'web'
], function () {
    Route::group([
        'prefix' => 'user',
        'as' => 'user.'
    ], function () {
        Route::get('/', 'UserController@index')->name('index');
        Route::get('/create', 'UserController@create')->name('create');
        Route::post('/create', 'UserController@store')->name('store');
    });
});
