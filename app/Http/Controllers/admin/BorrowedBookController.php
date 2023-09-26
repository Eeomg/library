<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Models\Borrowed_book;
use App\Http\Requests\InsertBooks;
use App\Http\Controllers\Controller;

class BorrowedBookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['books'] = Borrowed_book::all();
        $data['counter'] = 1 ;
        return view('admin.books.borrowed' , ['books' => $data['books'] , 'counter' => $data['counter']]);
    }
}
