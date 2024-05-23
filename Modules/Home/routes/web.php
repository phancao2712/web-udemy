<?php
use Illuminate\Support\Facades\Route;

Route::group([
    'namespace' => 'Modules\Home\src\Http\Controllers',
    'middleware' => 'web'
], function () {
    Route::get('/', function() {
        return 'home';
    })->name('home');
});
