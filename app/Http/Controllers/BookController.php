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
        return redirect('/books');
    }
    public function show($id)
    {
       $book= Book::find($id);
       return view('books.show', compact('book'));
    }
    public function edit($id)
    {
      $book= Book::find($id);
      return view('books.edit', compact('book'));
    }
    public function estore(Request $request ,$id)
    {
        $book = Book::find($id);
        $book->title = $request -> input('title');
        $book->description = $request -> input('description');
        $book->save();
        return redirect('/books');
    }
    public function delete( Request $request )
    {
        $book = Book::destroy($request->id);
        $books = Book::all();
        return view('books.index', compact('books'));
    }
}    
