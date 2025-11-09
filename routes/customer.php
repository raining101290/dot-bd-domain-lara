<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Customer\Auth\CustomerAuthController;

Route::prefix('customer')->name('customer.')->group(function () {
    
    // Guest routes (login/register)
    Route::middleware('guest:customer')->group(function () {
        Route::get('/register', [CustomerAuthController::class, 'showRegisterForm'])->name('register');
        Route::post('/register', [CustomerAuthController::class, 'register']);
        Route::get('/login', [CustomerAuthController::class, 'showLoginForm'])->name('login');
        Route::post('/login', [CustomerAuthController::class, 'login']);
    });

    // Authenticated customer routes
    // Route::middleware('auth:customer')->group(function () {
    //     Route::get('/attachments', [CustomerAuthController::class, 'showAttachmentsForm'])->name('attachments.form');
    //     Route::post('/attachments', [CustomerAuthController::class, 'uploadAttachments'])->name('attachments.upload');
    //     Route::get('/dashboard', [CustomerAuthController::class, 'dashboard'])->name('dashboard');
    //     Route::post('/logout', [CustomerAuthController::class, 'logout'])->name('logout');
    // });
});
