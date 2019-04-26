<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;

class BookController extends Controller
{
    public function index()
    {
       $books = Book::all();
       return view('books.index', compact('books'));
    }
    public function create()
    {
       return view('books.create');
    }
    public function store(Request $request)
    {
        $book = new Book;
        $book->title = $request -> input('title');
        $book->description = $request -> input('description');
        $book->save();
    }
}    
