<?php
use Illuminate\Support\Facades\Route;
use Modules\User\src\Http\Controllers\DashboardController;

Route::group([
    'namespace' => 'Modules\dashboard\src\Http\Controllers',
    'prefix' => 'admin',
    'as' => 'admin.'
], function () {
    Route::get('/', 'DashboardController@index')->name('dashboard');
});
