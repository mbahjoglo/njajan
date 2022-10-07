<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(){
        return view ('admin.pages-login');
    }

    public function loginproses(Request $request){
        if(Auth::attempt($request->only('email','password'))){
            return redirect('indexadmin');
        }

        return redirect('login');
    }

    public function register(){
        return view ('admin.pages-register');
    }

    public function registeruser(Request $request){
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'username' => $request->username,
            'password' => bcrypt($request->password),
            'remember_token' => Str::random(60),
        ]);

        return redirect('login');
    }

    public function logout(){
        Auth::logout();

        return redirect('index');
    }
}
