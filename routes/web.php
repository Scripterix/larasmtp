<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});
Route::get('/howtosendmail', function () {
    return view('howtosendmail');
});

Route::post('/send-email', [ContactController::class, 'sendEmail'])->name('send.email');
