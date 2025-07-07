<?php

use App\Jobs\SyncNews;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
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

Route::get('/locale', function () {
    echo App::getLocale();
});

Route::get('/locale/set/{locale}', function ($locale) {
    App::setLocale($locale);
    echo App::getLocale();
    echo '<hr>';
    echo __('messages.greet');
});

Route::get('/locale/{locale}/thanks', function ($locale, Request $request) {
    App::setLocale($locale);
    echo __('messages.thanks', ['name'=>$request->input('name')]);
});

Route::get('/test_sync', function () {
    SyncNews::dispatch(10);
    return response(['status' => 'success']);
});

require __DIR__ . '/settings.php';
require __DIR__ . '/auth.php';
