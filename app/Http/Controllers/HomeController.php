<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Borrowed_book;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\admin\BorrowedBookController;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data['books'] = Book::where('is_borrowed','!=',1)->get();
        return view('home' , ['books' => $data['books']]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function borrow($bookid)
    {
        Borrowed_book::create(
            [
            'books_id' => $bookid,
            'users_id' => Auth::user()->id,
            'borrowed_date' => time(),
            'return_date' => (time() + (60 * 60 * 24 * 7))
            ]
        );
        $book = Book::find($bookid);
        $book->is_borrowed = 1;
        $book->save();
        return redirect('/');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function return($bookid)
    {
        $book = Borrowed_book::where('users_id',Auth::user()->id)->where('books_id',$bookid);
        if($book){
            $book->delete();
            $book = Book::find($bookid);
            $book->is_borrowed = 0;
            $book->save();
        }
        return redirect('/');
    }

    public function profile()
    {
        $data['books'] = Borrowed_book::where('users_id',Auth::user()->id)->get();
        return view('profile' , ['books' => $data['books']]);
    }

    public function settings()
    {
        return view('settings');
    }

    public function update(Request $request)
    {
        $users = User::find(Auth::user()->id);
        $data = $request->all();
        $users->name  = $data['name'];
        $users->email = $data['email'];
        $users->phone = $data['phone'];
        $users->password = Hash::make($data['password']);
        $users->save();
        
        return redirect('/settings');
    }


}
