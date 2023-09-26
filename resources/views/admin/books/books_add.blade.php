@extends('admin.layouts.app')
@section('content')
<div class="card card-primary">

<div class="card-body row justify-content-center">
<form action="/admin/books"  method="post" enctype="multipart/form-data">
    @csrf
    <div class="form-group col-sm-8">
        <label for="">title</label>
        <input type="text" name="name" class="form-control bg-white">
    </div>
    <div class="form-group col-sm-8">
        <label for="">title</label>
        <input type="file" name="img" class="form-control bg-white">
    </div>
    <input type="submit" value="add" class="btn btn-primary col-sm-2 mt-2">
</form>
<div>
    
</div>
@endsection
