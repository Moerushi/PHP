<?php

use App\Mail\BookingComplitedMailing;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use Telegram\Bot\Laravel\Facades\Telegram;

Route::get('/', function () {
    return Inertia::render('welcome');
})->name('home');

Route::get('/book', function() {
    $email = 'nickitamatweev@yandex.ru';
    Mail::to($email)->send(new BookingComplitedMailing());
    return response()->json(['status'=>'ok']);
});

Route::get('/telegram', function() {
    Telegram::sendMessage([
        'chat_id'=> env('TELEGRAM_CHANNEL_ID'),
        'parse_mode'=>'html',
        'text'=>'Test event',
    ]);
    return response()->json(['status'=>'ok']);
});

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('dashboard', function () {
        return Inertia::render('dashboard');
    })->name('dashboard');
});

Route::get('/exception', function () {
throw new Exception('New exception');
});

require __DIR__.'/settings.php';
require __DIR__.'/auth.php';
