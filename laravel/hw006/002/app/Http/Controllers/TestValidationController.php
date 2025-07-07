<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \Illuminate\Validation\ValidationException;


class TestValidationController extends Controller
{
    //
    public function show()
    {
        return view('employee_validation');
    }

    public function post(Request $request)
    {
        // try {
        //     $validated = $request->validate([
        //         'first_name' => ['required'],
        //     ]);
        // } catch (ValidationException $e) {
        //     echo $e->getMessage();
        // }

        // var_dump($validated);

        $request->validate([
                'first_name' => ['required'],
                'password' => ['min:5'],
            ]);

    }

}
