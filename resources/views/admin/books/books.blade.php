@extends('admin.layouts.app')
@section('content')
<div class="container-fluid row ">
    <!-- <div class="col-sm-8 row text-center m-auto"> -->
        <div  class="col-sm-12 row ">
            <a href="/admin/books/create" class="btn btn-primary col-sm-2 m-auto" >add</a>
        </div>
        <div  class="col-sm-8 mx-auto my-3">
            <table class="table table-dark table-striped">
                <tr>
                    <th>id</th>
                    <th class="text-center">photo</th>
                    <th class="text-center">title</th>
                    <th class="text-center">actions</th>
                </tr>
                @foreach($books as $book)
                <tr >
                    <td>{{$counter++}}</td>
                    <td class="text-center"><img src="http://[::1]:5173/public/images/{{$book['photo']}}" style="width:50px"></td>
                    <td class="text-center">{{$book['name']}}</td>
                    <td class="text-center">
                        <form action="/admin/books/{{$book['id']}}" method="post" >
                            @method('delete')
                            @csrf
                            <a href="/admin/books/{{$book['id']}}/edit" class="btn btn-sm btn-success" >edit</a>
                            <a href="/admin/books/{{$book['id']}}"  class="btn btn-sm btn-primary">view</a>
                            <input type="submit" value="delete" class="btn btn-sm btn-danger">
                            <i class="fa fa-edit"></i>
                        </form>
                    </td>
                </tr>
                @endforeach
                <tr>
                    <th>id</th>
                    <th class="text-center">photo</th>
                    <th class="text-center">title</th>
                    <th class="text-center">actions</th>
                </tr>
            </table>
        </div>
    <!-- </div> -->
</div>
@endsection