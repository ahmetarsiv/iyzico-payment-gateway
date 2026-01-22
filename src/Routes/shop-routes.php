<?php

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;
use Illuminate\Support\Facades\Route;
use Webkul\Iyzico\Http\Controllers\PaymentController;

Route::group(['middleware' => ['web']], function () {
    Route::controller(PaymentController::class)->prefix('iyzico')->group(function () {

        /**
         * Iyzico payment routes
         */
        Route::get('/redirect', 'redirect')->name('iyzico.redirect');

        Route::get('/success', 'success')->name('iyzico.success');

        Route::get('/cancel', 'failure')->name('iyzico.cancel');

        Route::post('/callback', 'callback')->name('iyzico.callback')
            ->withoutMiddleware(VerifyCsrfToken::class);
    });
});
