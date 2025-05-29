<?php

use App\Http\Controllers\EmployeeController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('welcome');
})->name('home');

Route::get('/employees', function () {
    return view('employees', ['quantity' => 35]);
});

Route::get('/main', function () {
    return view('mainpage');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/users_list', function () {
    $users = ['ivan', 'petr', 'nikolai', 'vasilii', 'oleg'];
    return view('users', ['userslist' => $users]);
});

Route::get('/uppercase', function () {
    return view('testdir');
});

Route::get('/home', function () {
    return view('home', ['name'=>'Nick', 'age'=>10, 'position'=>'boss', 'address'=>'Moscow']);
});

Route::get('/contacts', function () {
    return view('contacts', ['address'=>'Moscow', 'post_code'=>'190000', 'email'=>'nick@gmail.com', 'phone'=>'+7 123 456 78 90']);
});

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('dashboard', function () {
        return Inertia::render('dashboard');
    })->name('dashboard');
});

require __DIR__ . '/settings.php';
require __DIR__ . '/auth.php';
