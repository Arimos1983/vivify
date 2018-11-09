@extends('master')
@section('content')
<div class="container">
    <h3 class="text-center">Registration form</h3>
    <form action="/register" method="POST">
        {{ csrf_field() }}
        
        <div class="form-group">
            <label for="email">Email</label>
            <input name="email" type="email" class="form-control" id="email" >
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input name="password" type="password" class="form-control" id="password" >
        </div>
        <div class="form-group">
            <label for="first_name">First Name</label>
            <input name="first_name" type="text" class="form-control" id="first_name" >
        </div>
        <div class="form-group">
            <label for="last_name">Last Name</label>
            <input name="last_name" type="text" class="form-control" id="last_name" >
        </div>
        <div class="form-group">
            <label for="company">Company</label>
            <input name="company" type="text" class="form-control" id="company" >
        </div>
        <div class="form-group">
            <label for="country">country</label>
            <select name="country" class="form-control" id="country" >
                @foreach($countries as $country)
                <option value="{{$country->name}}">{{$country->name}}</option>
                @endforeach
            </select>
            @if($errors)
            {{$errors}}
            @endif
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>    
@endsection