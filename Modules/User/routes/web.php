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
        'prefix' => 'users',
        'as' => 'users.'
    ], function () {
        Route::get('/', 'UserController@index')->name('index');
        Route::get('/create', 'UserController@create')->name('create');
        Route::post('/create', 'UserController@data')->name('store');
        Route::get('/data', 'UserController@data')->name('data');
    });
});
