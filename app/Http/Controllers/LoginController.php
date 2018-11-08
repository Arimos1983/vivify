<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;

class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest', ['except'=>'destroy']);
    }

    public function create()
    {
        return view('auth.login');
    }

    public function store()
    {
        $credentials = request()->only(['email', 'password']);
        if(!auth::attempt($credentials)){
            
            return redirect()->back()->withErrors([
                
                'message' => 'Bad credentials. Please ty again!'
            ]);
        }

        return redirect('/home');
    }

    public function destroy()
    {
        auth()->logout();

        return redirect('/home');
    }
}
