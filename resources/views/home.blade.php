<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <title>Home Page</title>
    </head>
    <body class="container">
    <body>
        <div class="container">
            <nav class="nav blog-nav">
            @if(auth()->check())
            <a class="nav-link active ml-auto" href="{{route('logout')}}">Logout</a>
            @else
            <a class="nav-link active ml-auto" href="{{route('login-form')}}">Login</a>
            @endif
            </nav>
        </div>
        <h1 class="text-center">This is home page</h1>
    </body>
</html>