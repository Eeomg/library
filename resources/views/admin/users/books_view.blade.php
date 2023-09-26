@extends('admin.layouts.app')
@section('content')
    <div class="container-fluid row ">
        <div  class="col-sm-4 mx-auto my-3">
            <table class="table table-dark table-striped">
                <tr >
                    <td>{{$students['id']}}</td>
                    <td class="text-center">{{$students['name']}}</td>
                    <td class="text-center">{{$students['email']}}</td>
                    <td class="text-center">{{$students['phone']}}</td>
                </tr>
            </table>
        </div>
        <div class="col-sm-12 text-center">
            <h3>Borrowed books</h3>
        </div>
        <div  class="col-sm-4 mx-auto my-3">
            <table class="table table-dark table-striped">
                <tr>
                    <th>id</th>
                    <th class="text-center">name</th>
                    <th class="text-center">borrowed_at</th>
                    <th class="text-center">return_at</th>
                </tr>
                @foreach($books as $book)
                <tr >
                    <td>{{$counter++}}</td>
                    <td class="text-center">{{ $book->books->name}}</td>
                    <td class="text-center">{{ $book->books->borrowed_date }}</td>
                    <td class="text-center">{{ $book->books->borrowed_return_date }}</td>
                </tr>
                @endforeach
                <tr>
                    <th>id</th>
                    <th class="text-center">name</th>
                    <th class="text-center">borrowed_at</th>
                    <th class="text-center">return_at</th>
                </tr>
            </table>
        </div>
    </div>
@endsection