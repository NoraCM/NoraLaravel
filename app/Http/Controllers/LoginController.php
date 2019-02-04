<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;


class LoginController extends Controller
{
    public function handleLogin(){
    	$data = Input::all(); 
    	$cred=[
            'email'=>$data['email'],
            'password'=>$data['password']
        ];
        if(Auth::attempt($cred)){
            return redirect(url('myspace'));
        }
        else{
            return back()->with('error','Invalid email or password');
        }
        
    }

}
