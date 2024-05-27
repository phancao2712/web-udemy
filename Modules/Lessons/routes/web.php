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
        Route::get('/{id}/create', [LessonController::class, 'create'])->name('create');
        Route::post('/{id}/create', [LessonController::class, 'store'])->name('store');
        Route::get('/{id}/data', [LessonController::class, 'data'])->name('data');
    });
});
