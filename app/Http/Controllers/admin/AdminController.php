<?php

namespace App\Http\Controllers\admin;

use App\Models\Admin;
use Illuminate\Http\Request;
use App\Http\Requests\InsertUsers;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['users'] = Admin::all();
        $data['counter'] = 1 ;
        return view('admin.admins' , ['users' => $data['users'] , 'counter' => $data['counter']]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.admin_add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(InsertUsers $request)
    {
        $data = $request->all();
        Admin::create(
            [
            'name'     => $data['name'],
            'email'    => $data['email'],
            'password' => Hash::make($data['password']),
            'position' => 'admin'
            ]
        );
        return redirect('/admin/admins');
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = Admin::find($id);
        return view('/admin/admin_edit',['users' => $data]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $users = Admin::find($id);
        $data = $request->all();
        $users->name  = $data['name'];
        $users->email = $data['email'];
        if(Auth::guard('admin')->user()->id == $users['id'] ) :
            $users->password = Hash::make($data['password']);
            $users->save();
            return redirect("/admin/admins/$id/edit");
        endif;
        $users->save();
        return redirect('/admin/admins');
    }
    
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Admin::destroy($id);   
        return redirect('/admin/admins');
    }
}
