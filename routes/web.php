<?php

use App\Http\Controllers\Customer\Auth\CustomerAuthController;
use App\Http\Controllers\DomainController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);

Route::get('/tld/{tld}', [DomainController::class, 'show'])->name('tld.show');
// Route::post('/domain/search', [DomainController::class, 'search'])->name('domain.search');
// Route::get('/domain/buy/{domain}', [DomainController::class, 'buy'])->name('domain.buy');
// Route::get('/domain/result', [DomainController::class, 'result'])->name('domain.result');

Route::get('/order/domain', [DomainController::class, 'order'])->name('domain.order');

// Route::get('/payment/{domain}', function ($domain) {
//     return view('domains.payment', compact('domain'));
// })->name('payment.show')->middleware('auth');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/customer/dashboard', function () {
    return view('customer.dashboard'); 
})->name('customer.dashboard');

Route::get('/customer/domains', function () {
    return view('customer.domains');
})->name('customer.domains');

Route::get('/customer/billing', function () {
    return view('customer.billing');
})->name('customer.billing');

Route::get('/customer/profile', function () {
    return view('customer.profile');
})->name('customer.profile');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

require __DIR__.'/auth.php';
require __DIR__.'/customer.php';