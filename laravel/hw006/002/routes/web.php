<?php

use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\FormBuilderTestController;
use App\Http\Controllers\TestFormController;
use App\Http\Controllers\TestValidationController;
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

Route::get ('/form', [TestFormController::class, 'displayForm'])->name('show_form');
Route::post ('/form', [TestFormController::class, 'postForm'])->name('post_form');

Route::get('/employee{id?}', [EmployeeController::class, 'show'])->name('show_employee');
Route::post('/employee', [EmployeeController::class, 'store'])->name('store_employee');

Route::get('/test_validation', [TestValidationController::class, 'show'])->name('show_validation_form');
Route::post('/test_validation', [TestValidationController::class, 'post'])->name('post_validation_form');

Route::get('/test_builder', [FormBuilderTestController::class, 'showForm'])->name('show_builder_test');
Route::post('/test_builder', [TestValidationController::class, 'post'])->name('post_builder_test');


require __DIR__.'/settings.php';
require __DIR__.'/auth.php';
