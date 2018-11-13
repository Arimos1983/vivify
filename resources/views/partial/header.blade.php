<div >
    <nav class="navbar navbar-light bg-dark text-justify">
        <div>
            <a class="navbar-brand" href="{{route('home')}}">Praksanje</a>
        </div>
        <div>  
            @if(auth()->check())
            <ul class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            {{auth()->user()->first_name}}
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="{{route('logout')}}">Logout</a>
            </div>
            </ul>
            @else
            <a class="nav-link active ml-auto" href="{{route('login-form')}}">Login</a>
            @endif
        </div>
    </nav>
</div>