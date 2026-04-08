<?php

use Illuminate\Support\Facades\Route;
use Webkul\Iyzico\Http\Controllers\PaymentController;

/**
 * Iyzico payment routes
 */
Route::middleware(['web'])->prefix('iyzico')->controller(PaymentController::class)->group(function () {
        Route::get('/redirect', 'redirect')->name('iyzico.redirect');

        Route::get('/success', 'success')->name('iyzico.success');

        Route::get('/cancel', 'failure')->name('iyzico.cancel');
});

Route::prefix('iyzico')->controller(PaymentController::class)->group(function () {
    Route::post('/callback', 'callback')->name('iyzico.callback');
});
