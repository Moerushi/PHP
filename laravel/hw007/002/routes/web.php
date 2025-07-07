<?php

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('welcome');
})->name('home');

// Route::get('/test_url', function () {
//     return 'Test';
// });

// через создание класса response
// Route::get('/test_url', function () {
//     $response = new Response('Test2', 200);
//     return $response;
// });

// через хэлпер response
Route::get('/test_url', function () {
    return response('Content', 200)
        ->header('Content-Type', 'application/json')
        ->header('x-header1', 'test');
});

//redirect, 301 постоянный, 302 временный
Route::get('/test_url', function () {
    // return redirect()->route('home');
    return redirect(null, 301)->away('https://google.com');
});

Route::get('/test_cookie', function () {
    return response('My first cookie')
        ->cookie('test_cookie', 'cookie_content', -1)
        // ->header('x-header1', 'test-header')
        // ->header('x-header2', 'test-header')
        // ->header('x-header3', 'test-header');
        ->withHeaders(['x-header4' => 'worked1', 'x-header5' => 'worked2', 'x-header6' => 'worked3'])
        ->withoutCookie('my_test_cookie'); // предпочтительнее
});

Route::get('/counter', function () {
    $counterValue = session('counter', 0);
    $counterValue++;
    session(['counter' => $counterValue]);
    return 'ok';
});

Route::get('/result_counter', function () {
    return session('counter', 0);
});

Route::get('/result_counters', function () {
    var_dump(session()->all());
});

Route::get('/result_counter_del', function () {
    if (session()->has('counter')) {
        session()->forget('counter');
    }
    var_dump(session()->all());
});

Route::get('/list_of_books', function () {
    // так как храним в сессии
    $listOfBooks = session()->get('list_of_books', '');
    // нужно возвращать в формате json
    return response()->json(['status' => 'recieved', 'list_of_books' => $listOfBooks ? unserialize($listOfBooks) : 'The list is empty']);
});

Route::post('/list_of_books', function (Request $request) {
    // получаем из сессии
    $listOfBooks = session()->get('list_of_books', '');

    $listOfBooks = $listOfBooks ? unserialize($listOfBooks) : [];

    $listOfBooks[] = ['author' => $request->get('author'), 'title' => $request->get('title')];

    session()->put('list_of_books', serialize($listOfBooks));

    return response()->json(['status' => 'saved', 'list_of_books' => $listOfBooks]);
});

Route::delete('/list_of_books/{id}', function ($id) {
    // получаем из сессии
    $listOfBooks = session()->get('list_of_books', '');

    $listOfBooks = $listOfBooks ? unserialize($listOfBooks) : [];

    if (array_key_exists($id, $listOfBooks)) {
        unset($listOfBooks[$id]);
    }

    session()->put('list_of_books', serialize($listOfBooks));

    return response()->json(['status' => 'deleted', 'list_of_books' => $listOfBooks]);
});

// загрузка файла
Route::get('/file_download', function () {
    return response()->download(base_path() . '/text.txt', 'my_file');
});

Route::get('/file_download_stream', function () {
    return response()->streamDownload(function () {
        echo file_get_contents('https://google.com');
    }, 'google.html');
});

//показ файла
Route::get('/file_show', function () {
    return response()->file(base_path() . '/text.txt');
});

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('dashboard', function () {
        return Inertia::render('dashboard');
    })->name('dashboard');
});

require __DIR__ . '/settings.php';
require __DIR__ . '/auth.php';
