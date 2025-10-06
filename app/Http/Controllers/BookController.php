<?php

namespace App\Http\Controllers;
use App\Models\Book;

use Illuminate\Http\Request;

class BookController extends Controller
{
    public function store(Request $request)
{
    $request->validate([
        'title' => 'required',
        'author' => 'nullable|string',
        'description' => 'nullable|string',
        'image' => 'nullable|image'
    ]);

    $book = new Book();
    $book->user_id = auth()->id();
    $book->title = $request->title;
    $book->author = $request->author;
    $book->description = $request->description;

    if ($request->hasFile('image')) {
        $book->image = $request->file('image')->store('books', 'public');
    }

    $book->save();

    return redirect()->route('books.index');
}

}
