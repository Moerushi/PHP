<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use Illuminate\Support\Facades\Redirect;

class EmployeeController extends Controller
{
    //
    public function show($id = null)
    {
        if($id){
            $employee = Employee::where('id', $id)->first();
        } else {
            $employee = null;
        }
        return view('employee', ['employee' => $employee]);
    }

    public function store(Request $request)
    {
        // передача единичными значениями
        // var_dump($request->all());
        // $employee = new Employee();
        // $employee->first_name = $request->input('first_name');
        // $employee->last_name = $request->input('last_name');
        // $employee->department = $request->input('department');
        // $employee->save();

        // передача массивом
        $employee = new Employee($request->all());
        // переводим массив в json строку
        $employee->department = serialize($request->input('department'));
        $employee->save();

        return Redirect::route('show_employee', ['id' => $employee->id]);

    }
}
