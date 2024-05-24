<?php
use Illuminate\Support\Facades\Route;

Route::group([
    'prefix' => 'admin',
    'as' => 'admin.',
], function(){
    Route::get('/', 'DashboardController@index')->name('dashboard');
});
