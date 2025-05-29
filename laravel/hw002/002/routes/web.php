<?php

use App\Http\Controllers\EntityController;
use App\Http\Controllers\FileUpload;
use App\Http\Controllers\FormProcessor;
use App\Http\Controllers\LibraryUserController;
use App\Http\Controllers\MyUserController;
use App\Http\Controllers\SendFileController;
use App\Http\Controllers\SimpleController;
use App\Http\Controllers\TestRedirectController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('welcome');
})->name('home');

Route::get('/userform', [FormProcessor::class, 'index']);
Route::post('/store_form', [FormProcessor::class, 'store']);

Route::get('/test', [SimpleController::class, 'test']);

Route::get('/user', [UserController::class, 'index']);
Route::post('/user', [UserController::class, 'store']);

Route::get('/books', [EntityController::class, 'index'])->name('books');
Route::post('/books', [EntityController::class, 'add'])->name('save_book');
Route::get('/remove_book/{id}', [EntityController::class, 'delete'])->name('remove_book');

Route::get('/upload', [FileUpload::class, 'index']);
Route::post('/upload', [FileUpload::class, 'upload'])->name('upload_file');

Route::get('/library_user/{id}', [LibraryUserController::class, 'showUser'])->where(['id' => '[0-1]+']);

Route::get('/myuser', [MyUserController::class, 'showUser']);

Route::get('/redirecttest', TestRedirectController::class);

Route::get('/sendfile', SendFileController::class);

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('dashboard', function () {
        return Inertia::render('dashboard');
    })->name('dashboard');
});

require __DIR__ . '/settings.php';
require __DIR__ . '/auth.php';
