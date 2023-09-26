@extends('admin.layouts.app')
@section('content')
@if(Auth::guard('admin')->user()->position == 'owner') :
<div class="card card-primary">

<div class="card-body row justify-content-center">
<form action="/admin/admins"  method="post">
    @csrf
    <div class="form-group col-sm-8">
        <label for="">name</label>
        <input type="text" name="name" class="form-control bg-white">
    </div>
    <div class="form-group col-sm-8">
        <label for="">email</label>
        <input type="text" name="email" class="form-control bg-white">
    </div>
    <div class="form-group col-sm-8">
        <label for="">password</label>
        <input type="text" name="password" class="form-control bg-white">
    </div>
    <input type="submit" value="add" class="btn btn-primary col-sm-2 mt-2">
</form>
<div>
    
</div>
@endif
@endsection