<?php

use Illuminate\Support\Facades\Route;
use Modules\User\src\Http\Controllers\UserController;

Route::group([
    'prefix' => 'admin',
    'as' => 'admin.',
], function(){
    Route::group([
        'prefix' => 'users',
        'as' => 'users.'
    ], function () {
        Route::get('/', 'UserController@index')->name('index');

        Route::get('/create', 'UserController@create')->name('create');
        Route::post('/create', 'UserController@store')->name('store');

        Route::get('/data', 'UserController@data')->name('data');

        Route::get('/edit/{id}', 'UserController@edit')->name('edit');
        Route::put('/update/{id}', 'UserController@update')->name('update');

        Route::delete('/destroy/{id}', 'UserController@destroy')->name('destroy');
    });
});

