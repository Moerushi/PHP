<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;


class UsersController extends Controller
{
    public function index()
    {
        $this->authorize('viewAny', User::class);
        return User::all();
    }
}
