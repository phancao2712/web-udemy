<?php

use Illuminate\Support\Facades\Route;
use Modules\Teacher\src\Http\Controllers\TeacherController;

Route::group([
    'prefix' => 'admin',
    'as' => 'admin.',
],function () {
    Route::group([
        'prefix' => 'teachers',
        'as' => 'teachers.'
    ], function () {
        Route::get('/', 'TeacherController@index')->name('index');

        Route::get('/create', 'TeacherController@create')->name('create');
        Route::post('/create', 'TeacherController@store')->name('store');

        Route::get('/data', 'TeacherController@data')->name('data');

        Route::get('/edit/{id}', 'TeacherController@edit')->name('edit');
        Route::put('/update/{id}', 'TeacherController@update')->name('update');

        Route::delete('/destroy/{id}', 'TeacherController@destroy')->name('destroy');
    });
});

