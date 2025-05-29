<?php

use App\Models\Employee;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test_database', function () {
    $employee = new Employee();
    $employee->name = "Alex";
    $employee->last_name = "Alexeev";
    $employee->save();
});