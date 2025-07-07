<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestCookieController extends Controller
{
    //
    public function testCookie(Request $request)
    {
        $sessionId = $request->cookie('laravel_session');
        echo $sessionId . PHP_EOL;
        $session = $request->session()->get('_token');
        // $session = $request->session();
        var_dump($session);
    }
}
