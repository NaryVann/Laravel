
@extends('layouts.app')

@section('content')
    <div class="jumbotron text-center">
        <h1>{{$title}}</h1>
        <p>This is the welcome page</p>
        <p><a class="btn btn-lg btn-primary" href="/login" role="button">Login</a> <a class="btn btn-lg btn-success" href="/register" role="button">Register</a>
    </div>
@endsection