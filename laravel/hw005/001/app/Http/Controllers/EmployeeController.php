<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index()
    {
        return view('get-employee-data');
    }
    public function store(Request $request)
    {
        $name = $request->input('name');
        $lastName = $request->input('last_name');
        $email = $request->input('email');
        $position = $request->input('position');
        $address = $request->input('address');
        $workData = $request->input('workData');
        $json = json_decode($request->input('jsonData'));
        $hobby = $json->hobby;

        var_dump($hobby);
        $userData = [
            'name' => $name,
            'last_name' => $lastName,
            'email' => $email,
            'position' => $position,
            'address' => $address,
            'workData' => $workData,
            'hobby' => $hobby
        ];

        $users = session()->get('users', '');
        $users = $users ? unserialize($users) : [];
        $users[] = $userData;
        session()->put('users', serialize($users));

        return response()->json(['status' => 'saved', 'users' => $users]);

    }
    public function showAllUsers()
    {
        $users = session()->get('users', '');
        // если мы хотим из сессии достать значения , то мы должно его дессериализовать
        return response()->json([
            'status' => 'received',
            'users' => $users ? unserialize($users) : 'There is no users in store'
        ]);
    }

    public function update(Request $request, $id)
    {
        $users = session()->get('users', '');

        $users = $users ? unserialize($users) : [];
        if (!array_key_exists($id, $users)) {
            return response()->json(['status' => 'User not exist']);
        }

        $users[$id] = $request->all();
        session()->put('users', serialize($users));

        return response()->json(['status' => 'updated', 'users' => $users]);
    }

    public function getPath(Request $request)
    {
        $path = $request->path();
        return $path;
    }
    public function getrusage(Request $request)
    {
        $url = $request->url();
        return $url;
    }
}
