<?php

use Illuminate\Support\Facades\Route;

Route::group([
    'prefix' => 'admin',
    'as' => 'admin.',
], function(){
    Route::group([
        'prefix' => 'students',
        'as' => 'students.'
    ], function () {
        Route::get('/', 'StudentController@index')->name('index');

        Route::get('/create', 'StudentController@create')->name('create');
        Route::post('/create', 'StudentController@store')->name('store');

        Route::get('/data', 'StudentController@data')->name('data');

        Route::get('/edit/{id}', 'StudentController@edit')->name('edit');
        Route::put('/update/{id}', 'StudentController@update')->name('update');

        Route::delete('/destroy/{id}', 'StudentController@destroy')->name('destroy');
    });
});

