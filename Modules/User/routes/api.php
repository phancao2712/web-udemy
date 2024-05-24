<?php

Route::prefix('user')->name('user.')->group(function () {
   Route::get('/', function (){
    return 'API user';
   });
});
