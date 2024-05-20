<?php

use Illuminate\Support\Facades\Route;
use Modules\Categories\src\Http\Controllers\CategoryController;

Route::group([
    'namespace' => 'Modules\Categories\src\Http\Controllers',
    'prefix' => 'admin',
    'as' => 'admin.',
    'middleware' => 'web'
], function () {
    Route::group([
        'prefix' => 'categories',
        'as' => 'categories.'
    ], function () {
        Route::get('/', 'CategoryController@index')->name('index');

        Route::get('/create', 'CategoryController@create')->name('create');
        Route::post('/create', 'CategoryController@store')->name('store');

        Route::get('/data', 'CategoryController@data')->name('data');

        Route::get('/edit/{id}', 'CategoryController@edit')->name('edit');
        Route::put('/update/{id}', 'CategoryController@update')->name('update');

        Route::delete('/destroy/{id}', 'CategoryController@destroy')->name('destroy');


    });
});
