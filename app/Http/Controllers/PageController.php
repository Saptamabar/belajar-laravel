<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function welcome() {
        return view('welcome');
    }

    public function dashboard(){
        return view('dashboard');
    }

    public function profile(string $name){
        return view('profile' , ['name' => $name]);
    }

    public function login(){
        return view('login');
    }

    public function LoginPost(Request $request){
        $email = $request->input('email');
        return redirect()->route('profile',['name' => $email]);
    }
}
