<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', function () {
    return view('home', ['name' => 'Alex', 'age' => 40, 'position' => 'Saint-Petersburg', 'address' => 'pros. Moskovskiy']);
});

Route::get('/contacts', function () {
	
    return view('contacts', ['address' => 'pros. Moskovskiy', 'post_code' => 188305, 'email' => 'alex@mail.com', 'phone' => 98154154884]);
});
