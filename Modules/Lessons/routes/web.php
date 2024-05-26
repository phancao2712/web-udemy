<?php
use Modules\Lessons\src\Http\Controllers\LessonController;

Route::group([
    'prefix' => 'admin',
    'as' => 'admin.'
], function () {
    Route::group([
        'prefix' => 'lessons',
        'as' => 'lessons.'
    ], function () {
        Route::get('/{id}', [LessonController::class, 'index'])->name('index');
        Route::get('/create', [LessonController::class, 'create'])->name('create');
    });
});
