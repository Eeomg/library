@extends('admin.layouts.app')
@section('content')
<ul>
    <li>{{$books['id']}}</li>
    <li>{{$books['name']}}</li>
</ul>
@endsection