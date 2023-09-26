@extends('layouts.app')
@section('content')
<div class="card card-primary">
<div class="card-body row justify-content-center">
<form action="/update" method="POST">
    @method('put')
    @csrf
    <div class="form-group col-sm-8">
        <label for="">name</label>
        <input type="text" value="{{Auth::user()->name}}" name="name" class="form-control bg-white">
    </div>
    <div class="form-group col-sm-8">
        <label for="">email</label>
        <input type="text" value="{{Auth::user()->email}}" name="email" class="form-control bg-white">
    </div>
    <div class="form-group col-sm-8">
        <label for="">phone</label>
        <input type="text" value="{{Auth::user()->phone}}" name="phone" class="form-control bg-white">
    </div>
    <div class="form-group col-sm-8">
        <label for="">password</label>
        <input type="text" value="" name="password" class="form-control bg-white">
    </div>
    <input type="submit" value="update" class="btn btn-primary col-sm-2 mt-2">
</form>
<div>
    
</div>
@endsection
