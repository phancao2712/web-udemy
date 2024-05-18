<?php

use Illuminate\Support\Facades\Route;
use Modules\User\src\Http\Controllers\UserController;

Route::group([
    'namespace' => 'Modules\User\src\Http\Controllers',
], function () {

    Route::group(['prefix' => 'user'], function () {
        Route::get('/', 'UserController@index');
    });
});
