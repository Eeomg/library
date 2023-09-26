@extends('admin.layouts.app')
@section('content')
<div class="container-fluid row ">
        <div  class="col-sm-8 mx-auto my-3">
            <table class="table table-dark table-striped">
                <tr>
                    <th>id</th>
                    <th class="text-center">title</th>
                    <th class="text-center">user</th>
                    <th class="text-center">borrowed_at</th>
                    <th class="text-center">return_at</th>
                </tr>
                @foreach($books as $book)
                <tr >
                    <td>{{$counter++}}</td>
                    <td class="text-center">{{ $book->books->name }}</td>
                    <td class="text-center">{{ $book->users->name }}</td>
                    <td class="text-center">{{date('Y-m-d', $book->borrowed_date)}}</td>
                    <td class="text-center">{{date('Y-m-d', $book->return_date)}}</td>
                </tr>
                @endforeach
                <tr>
                    <th>id</th>
                    <th class="text-center">name</th>
                    <th class="text-center">student</th>
                    <th class="text-center">borrowed_at</th>
                    <th class="text-center">return_at</th>
                </tr>
            </table>
        </div>
</div>
@endsection