<?php

use Illuminate\Support\Facades\Route;

Route::group([
    'namespace' => 'Modules\User\src\Http\Controllers',
    'prefix' => 'user',
    // 'middleware' => 'demo'
], function () {
    Route::get('/', 'UserController@index');
    Route::get('/detail/{id}', 'UserController@detail');
});
