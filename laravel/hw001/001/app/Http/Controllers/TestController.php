<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    //
    // public function index() {
    //     echo "Hello world";
    // }

    public function __invoke()
    {
        echo "Hello world, again!";
    }
}
