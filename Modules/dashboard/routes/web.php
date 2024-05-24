<?php
use Illuminate\Support\Facades\Route;

Route::group([
    'namespace' => 'Modules\Dashboard\src\Http\Controllers',
    'prefix' => 'admin',
    'as' => 'admin.',
    'middleware' => 'web'
], function () {
    Route::get('/', 'DashboardController@index')->name('dashboard');
});
