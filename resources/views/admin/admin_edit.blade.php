@extends('admin.layouts.app')
@section('content')
@if(Auth::guard('admin')->user()->position == 'owner' || Auth::guard('admin')->user()->id == $users['id'] ) :
    <div class="card card-primary">
        <div class="card-body row justify-content-center">
            <form action="/admin/admins/{{$users['id']}}" method="post">
                @method('put')
                @csrf
                <div class="form-group col-sm-8">
                    <label for="">name</label>
                    <input type="text" value="{{$users['name']}}" name="name" class="form-control bg-white">
                </div>
                <div class="form-group col-sm-8">
                    <label for="">email</label>
                    <input type="text" value="{{$users['email']}}" name="email" class="form-control bg-white">
                </div>
                @if(Auth::guard('admin')->user()->id == $users['id'] )
                <div class="form-group col-sm-8">
                    <label for="">password</label>
                    <input type="text" name="password" class="form-control bg-white">
                </div>
                @endif
                <input type="submit" value="update" class="btn btn-primary col-sm-2 mt-2">
            </form>
        <div>
    </div>
    @endif
    @endsection

