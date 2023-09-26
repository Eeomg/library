<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('admin.auth.login');
    }

    public function signin(Request $request)
    {
        $request->validate(
                [
                'email'    => ['required','string'],
                'password' => ['required','string']
                ]
            );
            if(Auth::guard('admin')->attempt(['email'=>$request->email , 'password' => $request->password])){
                return redirect('/admin/books');
            }else{
                return redirect()->back();
            }
        }
    
    public function signout(Request $request)
    {
        Auth::guard('admin')->logout();
        return redirect('/admin/login');
    }
}
