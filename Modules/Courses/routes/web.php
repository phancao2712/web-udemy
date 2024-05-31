<?php

use Illuminate\Support\Facades\Route;
use Modules\Courses\src\Http\Controllers\clients\CourseController;


Route::group([
    'prefix' => 'admin',
    'as' => 'admin.',
], function () {
    Route::group([
        'prefix' => 'courses',
        'as' => 'courses.'
    ], function (){
        Route::get('/', 'CourseController@index')->name('index');

        Route::get('/create', 'CourseController@create')->name('create');
        Route::post('/create', 'CourseController@store')->name('store');

        Route::get('/data', 'CourseController@data')->name('data');

        Route::get('/edit/{id}', 'CourseController@edit')->name('edit');
        Route::put('/update/{id}', 'CourseController@update')->name('update');

        Route::delete('/destroy/{id}', 'CourseController@destroy')->name('destroy');
    });
});


Route::group([
    'as' => 'courses.'
], function() {
    Route::get('/khoa-hoc', [CourseController::class, 'index'])->name('index');
    Route::get('/khoa-hoc/{slug}', [CourseController::class, 'detail'])->name('detail');

    Route::group([
        'prefix' => 'data',
        'as' => 'data.',
    ], function(){
        Route::get('/trial/{id}', [CourseController::class, 'getTrial'])->name('trial');
        Route::get('/stream', [CourseController::class, 'stream'])->name('stream');
    });
});
