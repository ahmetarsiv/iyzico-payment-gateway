<?php

use Illuminate\Support\Facades\Route;
use Webkul\Core\Http\Middleware\NoCacheMiddleware;
use Webkul\Iyzico\Http\Controllers\OnboardingController;

Route::group(['middleware' => ['web', 'admin', NoCacheMiddleware::class], 'prefix' => config('app.admin_url')], function () {
    Route::prefix('iyzico')->group(function () {
        Route::controller(OnboardingController::class)->prefix('onboarding')->group(function () {
            Route::get('/', 'index')->name('admin.iyzico.onboarding.index');
        });
    });
});
