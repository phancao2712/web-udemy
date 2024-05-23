<?php
use Illuminate\Support\Facades\Route;

Route::group([
    'namespace' => 'Modules\Dashboard\src\Http\Controllers',
    'prefix' => 'admin',
    'as' => 'admin.'
], function () {
    Route::get('/', 'DashboardController@index')->name('dashboard');
});
