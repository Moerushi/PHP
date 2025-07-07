<?php

use App\Events\NewsCreated;
use App\Models\News;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;


Route::get('/', function () {
    return Inertia::render('welcome');
})->name('home');

// Route::get('/test', function () {
//     NewsCreated::dispatch(News::first());
// });

// Route::get('/test_news', function () {
//     News::withoutEvents(function() {
//         News::first()->update(['title'=>'testtest']);

//     });
//     return 'updated';
// });

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('dashboard', function () {
        return Inertia::render('dashboard');
    })->name('dashboard');
});

require __DIR__ . '/settings.php';
require __DIR__ . '/auth.php';
