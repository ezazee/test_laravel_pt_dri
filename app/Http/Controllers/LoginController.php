<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class LoginController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function loginuser(Request $request){
        if(Auth::attempt($request->only('email', 'password'))){
            return redirect('/admin');
        }

        return \redirect('/login');
    }

    public function register(){
        return view('auth.register');
    }

    public function registeruser(Request $request){
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'remember_token' => Str::random(60),
        ]);

        return \redirect('/login');
    }

    public function logout(){
        Auth::logout();
        return \redirect('/login');
    }
}
