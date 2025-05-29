<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    //
    protected $employees = ['Alex'];

    public function __invoke()
    {
        return view('employees');
    }
}
