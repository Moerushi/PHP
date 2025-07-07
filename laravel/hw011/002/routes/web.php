<?php

use App\Http\Controllers\UsersController;
use App\Http\Middleware\LogRequestMiddleware;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('welcome');
})->name('home');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('dashboard', function () {
        return Inertia::render('dashboard');
    })->name('dashboard');
});

Route::middleware(LogRequestMiddleware::class)->group(function () {
    Route::get('/test_middleware', function () {
        return response()->json(['status' => 'success']);
    });
});

Route::get('/users', [UsersController::class, 'index']);

require __DIR__ . '/settings.php';
require __DIR__ . '/auth.php';
