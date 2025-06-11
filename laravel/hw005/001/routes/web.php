<?php

use App\Http\Controllers\EmployeeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/get-employee-data', [EmployeeController::class,'index']);

Route::post('/store-form', [EmployeeController::class, 'store']);

Route::get('/users',[EmployeeController::class, 'showAllUsers']);

Route::put('/user/{id}', [EmployeeController::class, 'update']);