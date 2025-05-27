<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __invoke()
    {
        $users = DB::connection('mysql')->table('users')->select(['name','email'])->get();
        return view('users', ['users' => $users]);
    }
}
