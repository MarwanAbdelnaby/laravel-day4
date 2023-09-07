<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Book;
use Illuminate\Http\Request;
class BookController extends Controller
{
    function index()
{
    $books = Book::all();
        return response()->json([
            "status" => 200,
            'data' => $books
        ]);
}
function create()
    {
        return view("books.create");
    }

    function store(Request $request)
{
    $book = Book::create([
        'name' => $request->name,
        'price' => $request->price,
        'description' => $request->description
    ]);

    return response()->json([
        "status" => 202,
        'data' => $book
    ]);
}
function show( $book)
    {
        $book = Book::findOrFail($book);
        return response()->json([
            "status" => 200,
            'data' => $book
        ]);
    }
    function edit(Book $book)
{
    return view('books.edit', compact('book'));
}
function update(Request $request, Book $book)
{
    $book->update([
        'name' => $request->name,
        'price' => $request->price,
        'description' => $request->description
    ]);
    return response()->json([
        "status" => 200,
        'data' => $book
    ]);
}

function destroy(Book $book)
{
    $book->delete();

     return response()->json([
        "status" => 200,
        'data' => $book
    ]);
}

}
