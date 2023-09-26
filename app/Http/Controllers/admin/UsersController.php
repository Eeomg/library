<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Borrowed_book;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if(isset($_GET['key'])){
            $data['students'] = User::where('id','like',$_GET['key']."%")->get();
        }else{
            $data['students'] = User::all();
        }
        $data['counter'] = 1 ;
        return view('admin.users.students' , ['students' => $data['students'] , 'counter' => $data['counter']]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data['students'] = User::find($id);
        $data['books']    = Borrowed_book::where('users_id',$id)->get();
        $data['counter']  = 1 ;
        return view('admin.users.books_view',['students' => $data['students'],'books' => $data['books'], 'counter' => $data['counter']]);
    }
}
