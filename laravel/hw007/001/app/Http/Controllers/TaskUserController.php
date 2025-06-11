<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\TaskUser;
use Illuminate\Http\Request;

class TaskUserController extends Controller
{
    public function index()
    {
        return view('form');
    }

    public function show()
    {
        return TaskUser::all();
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'max:50'],
            'surname' => ['required', 'max:50'],
            'email' => ['required', 'regex:/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/'],
        ]);

        if ($validated) {
            $book = new TaskUser($request->all());
            $book->save();
        }
        return redirect()->route('store-user')->with('success', 'User added successfully.');
    }
    public function get(Request $request, $id)
    {
        $user = TaskUser::where('id', $id)->first();
        return $user;
    }
}
