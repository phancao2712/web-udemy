<?php

use Illuminate\Support\Facades\Route;
use Modules\Courses\src\Http\Controllers\CourseController;

Route::group([
    'namespace' => 'Modules\Courses\src\Http\Controllers',
    'prefix' => 'admin',
    'as' => 'admin.',
    'middleware' => 'web'
], function () {
    Route::group([
        'prefix' => 'courses',
        'as' => 'courses.'
    ], function () {
        Route::get('/', 'CourseController@index')->name('index');

        Route::get('/create', 'CourseController@create')->name('create');
        Route::post('/create', 'CourseController@data')->name('store');

        Route::get('/data', 'CourseController@data')->name('data');

        Route::get('/edit/{id}', 'CourseController@edit')->name('edit');
        Route::put('/update/{id}', 'CourseController@update')->name('update');

        Route::delete('/destroy/{id}', 'CourseController@destroy')->name('destroy');
    });
});

Route::group(['prefix' => 'filemanager', 'middleware' => ['web']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});
