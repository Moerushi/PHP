<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function index() {
        return view('user');
    }

    public function store(Request $request) {
        $userData = ['User name' => $request->username, 'Email ' => $request->email];
        return response()->json($userData);

    }
}
