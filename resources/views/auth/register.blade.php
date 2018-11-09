<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Register</title>
</head>
<body>
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
</body>
</html>