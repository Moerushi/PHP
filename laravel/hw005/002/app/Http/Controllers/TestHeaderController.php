<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestHeaderController extends Controller
{
    //
    public function getHeader(Request $request)
    {
        $userAgent = $request->header('User-Agent');
        echo $userAgent . PHP_EOL;
        echo $request->header('My-header', 'Test') . PHP_EOL;
        if ($request->hasHeader('My-header')) {
            echo $request->header('My-header');
        }
    }
}
