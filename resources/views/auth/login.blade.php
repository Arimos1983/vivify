<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Login</title>
</head>
<body>
    <div class="container">
        <div>
            @if(!auth()->check())
            <a class="nav-link active ml-auto" href="{{route('register-form')}}">Sign up</a>
            @endif
        </div>
        <form action="{{route('login')}}" method="POST">
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
</body>
</html>