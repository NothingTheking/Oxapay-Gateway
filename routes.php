<?php

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;
use Illuminate\Support\Facades\Route;
use Paymenter\Extensions\Gateways\oxapay\oxapay;

Route::post(
    '/extensions/gateways/oxapay/webhook',
    [oxapay::class, 'webhook']
)
->withoutMiddleware([VerifyCsrfToken::class])
->name('extensions.gateways.oxapay.webhook');
