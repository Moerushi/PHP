<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\Console\Input\Input;

class RequestTestController extends Controller
{
    //
    public function testRequest (Request $request) {
        $firstName = $request->input('first_name', 'No name');
        $lastName = $request->input('last_name', 'No name');

        echo $firstName . ' ' . $lastName;
    }
}
