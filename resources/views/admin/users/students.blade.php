@extends('admin.layouts.app')
@section('content')
<div class="container-fluid row ">
        <div  class="col-sm-6 mx-auto my-3">
            <form action="/admin/students" method="get">
                <input type="text" name="key">
                <input type="submit" value="search">
            </form>
            <table class="table table-dark table-striped">
                <tr>
                    <th>#</th>
                    <th class="text-center">name</th>
                    <th class="text-center">email</th>
                    <th class="text-center">phone</th>
                    <th class="text-center">actions</th>
                </tr>
                @foreach($students as $student)
                <tr >
                    <td>{{$counter++}}</td>
                    <td class="text-center">{{$student['name']}}</td>
                    <td class="text-center">{{$student['email']}}</td>
                    <td class="text-center">{{$student['phone']}}</td>
                    <td class="text-center">
                        <a href="/admin/students/{{$student['id']}}"  class="btn btn-sm btn-primary">books</a>
                    </td>
                </tr>
                @endforeach
                <tr>
                    <th>#</th>
                    <th class="text-center">name</th>
                    <th class="text-center">email</th>
                    <th class="text-center">phone</th>
                    <th class="text-center">actions</th>
                </tr>
            </table>
        </div>
    <!-- </div> -->
</div>
@endsection