<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateBookRequest;
use App\Http\Requests\StoreBookRequest;
use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookController extends Controller
{
    function index()
{
    $books = Book::all(); 
    return view('books.index', ['books' => $books]);
}
function create()
    {
        return view("books.create");
    }

    function store(StoreBookRequest $request)
{
    $book = Book::create([
        'name' => $request->input('name'),
        'price' => $request->input('price'),
        'description' => $request->input('description'),
    ]);

    return redirect()->route('books.index');
}
function show( $book)
    {
        $book = Book::findOrFail($book);
        return view('books.show', ["book" => $book]);
    }
    function edit(Book $book)
{
    return view('books.edit', compact('book'));
}
function update(UpdateBookRequest $request, Book $book)
{
    $book->update([
        'name' => $request->name,
        'price' => $request->price,
        'description' => $request->description
    ]);
    return redirect()->route('books.index');
}

public function destroy(Book $book)
{
    $book->delete();

    return redirect()->route('books.index');
}

}
