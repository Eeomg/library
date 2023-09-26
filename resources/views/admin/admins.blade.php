
@extends('admin.layouts.app')
@section('content')
@if(Auth::guard('admin')->user()->position == 'owner') :
<div class="container ">

    <a href="/admin/admins/create" class="btn btn-primary col-sm-2" >add</a>
    <table class="table col-sm-8 table-bordered table-dark">
        <tr>
            <th>id</th>
            <th>name</th>
            <th>email</th>
            <th>position</th>
            <th class="text-center">actions</th>
        </tr>
        @foreach($users as $user)
        <tr >
            <td>{{$counter++}}</td>
            <td>{{$user['name']}}</td>
            <td>{{$user['email']}}</td>
            <td>{{$user['position']}}</td>
            <td class="text-center">
                <form action="/admin/admins/{{$user['id']}}" method="post" >
                @method('delete')
                @csrf
                <a href="/admin/admins/{{$user['id']}}/edit" class="btn btn-success" >edit</a>
                <input type="submit" value="delete" class="btn btn-danger">
            </form>
        </td>
    </tr>
    @endforeach
    <tr>
        <th>id</th>
        <th>name</th>
        <th>email</th>
        <th>position</th>
        <th class="text-center">actions</th>
    </tr>
</table>
</div>
@endif
@endsection