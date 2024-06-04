<?php

use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Support\Facades\Route;
use Modules\Auth\src\Http\Controllers\Client\BlockController;
use Modules\Auth\src\Http\Controllers\Client\ForgotPasswordController;
use Modules\Auth\src\Http\Controllers\Client\LoginController;
use Modules\Auth\src\Http\Controllers\Admin\LoginController as AdminLoginController;
use Modules\Auth\src\Http\Controllers\Client\RegisterController;
use Modules\Auth\src\Http\Controllers\Client\VerifyController;


Route::get('/login', [AdminLoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AdminLoginController::class, 'login'])->name('login');
Route::post('/logout', [AdminLoginController::class, 'logout'])->name('logout');

Route::group(['as' => 'client.'], function () {
    Route::get('dang-nhap', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('dang-nhap', [LoginController::class, 'login']);

    Route::get('dang-ki', [RegisterController::class, 'showRegisterForm'])->name('register');
    Route::post('dang-ki', [RegisterController::class, 'register']);

    Route::get('dang-xuat', [LoginController::class, 'logout'])->name('logout');

    Route::get('/block', [BlockController::class, 'index'])->name('block.index');
});

Route::get('/email/verify', [VerifyController::class, 'index'])->middleware('auth:students')->name('verification.notice');

Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();

    return redirect()->route('home');
})->middleware(['auth:students', 'signed'])->name('verification.verify');

Route::post('/email/verification-notification', [VerifyController::class, 'resend'])
    ->middleware(['auth:students', 'throttle:6,1'])->name('verification.send');

Route::get('/quen-mat-khau', [ForgotPasswordController::class, 'showFormForgotPassword'])
    ->middleware('guest:students')->name('password.request');

Route::post('/quen-mat-khau', [ForgotPasswordController::class, 'handleSendForgotLink'])
    ->middleware('guest:students')->name('password.email');

Route::get('/dat-lai-mat-khau/{token}', [ForgotPasswordController::class, 'showFormResetPassword'])
    ->middleware('guest:students')->name('password.reset');

Route::post('/dat-lai-mat-khau', [ForgotPasswordController::class, 'resetPassword'])
->middleware('guest:students')->name('password.update');
