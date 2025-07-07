<?php

use App\Http\Controllers\FileUploadController;
use App\Http\Controllers\JsonParseController;
use App\Http\Controllers\RequestTestController;
use App\Http\Controllers\TestCookieController;
use App\Http\Controllers\TestHeaderController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('welcome');
})->name('home');

Route::get('/test_parameters', [RequestTestController::class, 'testRequest']);
Route::get('/test_header', [TestHeaderController::class, 'getHeader']);
Route::get('/test_cookie', [TestCookieController::class, 'testCookie']);

Route::get('/upload_file', [FileUploadController::class, 'showForm'])->name('showForm');
Route::post('/upload_file', [FileUploadController::class, 'fileUpload'])->name('uploadFile');

Route::post('/json_parse', [JsonParseController::class, 'parseJson']);

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('dashboard', function () {
        return Inertia::render('dashboard');
    })->name('dashboard');
});

require __DIR__.'/settings.php';
require __DIR__.'/auth.php';
