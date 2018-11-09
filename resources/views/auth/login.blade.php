@extends('master')
@section('content')
<div class="container">
    <div>
        @if(!auth()->check())
        <a class="nav-link active ml-auto" href="/register">Sign up</a>
        @endif
    </div>
    <form action="/login" method="POST">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="email">Email</label>
            <input name="email" type="email" class="form-control" id="email" >
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input name="password" type="password" class="form-control" id="password" >
            @if($errors)
            {{$errors}}
            @endif
        </div>
        <button type="submit" class="btn btn-primary">Login</button>
    </form>
<div>
@endsection