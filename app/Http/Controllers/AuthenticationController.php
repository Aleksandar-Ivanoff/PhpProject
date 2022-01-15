<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthenticationController extends Controller
{
    //
    public function register(){
        return view('auth.register');
    }

    public function store(Request $request){
        $this->validate($request,[
            'username'=>'required|max:255',
            'email'=>'required|email',
            'password'=>'required|confirmed',
        ]);

        User::create([
            'name' => $request->username,
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        
        return redirect()->route('login');
       
    }

    public function signInUser(Request $request){

        $this->validate($request,[
            'username'=>'required',
            'password'=>'required',
        ]);

       if(!auth()->attempt($request->only('username','password'))){
           return back()->with('status','Invalid login details');
       }

        
         return redirect()->route('index');
    }

    public function login(){
        return view('auth.login');
    }

    public function logout(){
        auth()-> logout();

        return redirect()->route('index');
    }
}
