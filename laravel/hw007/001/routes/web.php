<?php

use App\Http\Controllers\PdfGeneratorController;
use App\Http\Controllers\TaskUserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/store-user',[TaskUserController::class, 'index'])->name('store-user');

Route::get('/users',[TaskUserController::class, 'show']);

Route::get('/user/{id}',[TaskUserController::class, 'get']);

Route::post('/store-user',[TaskUserController::class, 'store']);

Route::get('/resume/{id}',[PdfGeneratorController::class, 'index']);
