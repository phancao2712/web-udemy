<?php

use Illuminate\Support\Facades\Route;
use Modules\Students\src\Http\Controllers\Clients\AccountController as ClientAccountController;

Route::group([
    'prefix' => 'admin',
    'as' => 'admin.',
], function () {
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

Route::group(['as' => 'students.',], function () {
    Route::group([
        'prefix' => 'tai-khoan',
        'as' => 'accounts.',
        'middleware' => ['auth:students', 'block.students', 'verified']
    ], function () {
        Route::get('', [ClientAccountController::class, 'index'])->name('index');
        Route::get('/thong-tin', [ClientAccountController::class, 'account'])->name('account');
        Route::get('/khoa-hoc', [ClientAccountController::class, 'course'])->name('course');
        Route::get('/don-hang', [ClientAccountController::class, 'order'])->name('order');
        Route::get('/doi-mat-khau', [ClientAccountController::class, 'changePassword'])->name('changePassword');
    });
});

