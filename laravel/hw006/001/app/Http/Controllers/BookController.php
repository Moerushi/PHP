<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        return view('form');
    }
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => ['required', 'max:255', 'unique:books', 'bail', 'regex:/^\S.*\S$/' ],
            'author' => ['required', 'max:100', 'bail', 'regex:/^\S.*\S$/'],
            'genre' => ['required', 'min:5'],
        ]);

        if ($validated) {
            $book = new Book($request->all());
            $book->save();
        }
    }
}
