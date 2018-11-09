<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserValidationRules;
use App\Country;
use App\User;

class RegisterController extends Controller
{
    public function __constructor()
    {
        $this->middleware('guest');
    }

    public function create()
    {
        $countries = Country::all('name');
        return view('auth.register', compact('countries',$countries));
    }

    public function store(UserValidationRules $request)
    {
        $user = User::create([
            'email' => request('email'),
            'password' => bcrypt(request('password')),
            'first_name' => request('first_name'),
            'last_name' => request('last_name'),
            'company' => request('company'),
            'country' => request('country'),
        ]);

        auth()->login($user);
        return redirect('/home');
    }
}
