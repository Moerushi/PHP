<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LibraryUserController extends Controller
{
protected $users = [
['id'=> 0, 'username' => 'user1', 'first_name'=> 'Vasilii', 'last_name' =>'Vasiliev', 'list_of_books' => ['Book1', 'Book2'] ],
['id'=> 1,'username' => 'user2', 'first_name'=> 'Ivan', 'last_name' =>'Ivanov', 'list_of_books' => ['Book3', 'Book4'] ]
];

    //
    public function showUser($id){
        return view('new', ['user' => $this->users[$id]]);
    }
}
