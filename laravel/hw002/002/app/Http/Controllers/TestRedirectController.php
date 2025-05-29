<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestRedirectController extends Controller
{
    //
    public function __invoke()
    {
        // редирект на внешний ресурс
        // return redirect()->away('https://google.com');
        // редирект на экшн
        // return redirect()->action([LibraryUserController::class, 'showUser'], ['id' => 0]);
        // редирект на роут
        return redirect()->route('books');
    }
}
