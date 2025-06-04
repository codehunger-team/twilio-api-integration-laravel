<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TwilioController;


Route::get('/send-test-sms', [TwilioController::class, 'sendSms']);