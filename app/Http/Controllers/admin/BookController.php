<?php

namespace App\Http\Controllers\admin;

use App\Models\Book;
use App\Http\Requests\InsertBooks;
use App\Http\Controllers\Controller;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['books'] = Book::all();
        $data['counter'] = 1 ;
        return view('admin.books.books' , ['books' => $data['books'] , 'counter' => $data['counter']]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.books.books_add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(InsertBooks $request)
    {
        $data = $request->all();
        $file = $request->img;
        $destinationPath = public_path('images'); // Adjust the destination path as needed
        $fileName = uniqid() . '.' . $file->getClientOriginalExtension();
        $file->move($destinationPath, $fileName);
        $book = new book();
        $book->name = $data['name'];
        $book->photo = $fileName;
        $book->is_borrowed = 0;
        $book->save();
        return redirect('/admin/books');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = Book::find($id);
        return view('admin.books.books_view',['books' => $data]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = Book::find($id);
        return view('admin.books.books_edit',['books' => $data]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(InsertBooks $request, string $id)
    {
        // dd("osama");
        $books = Book::find($id);
        $books->name = $request['name'];
        $books->save();
        return redirect('/admin/books');
    }
    
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Book::destroy($id);   
        return redirect('/admin/books');
    }
}
