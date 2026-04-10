<?php
// Razorpay callback GET fallback (mobile/in-app browsers)
use Vfixtechnology\Razorpay\Http\Controllers\RazorpayController;

Route::get('razorpaycheck', [RazorpayController::class, 'verify'])
    ->name('razorpay.callback.get');
