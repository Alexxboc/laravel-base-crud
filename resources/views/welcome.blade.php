@extends('layouts.app')

@section('content')
<nav class="navbar navbar-expand navbar-light bg-light d-flex justify-content-center">
    <ul class="nav navbar-nav">
        <li class="nav-item active">
            <a class="nav-link" href="{{route('welcome')}}">Home <span class="visually-hidden">(current)</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('comics.index')}}">Comics</a>
        </li>
    </ul>
</nav>
@endsection