<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;


class RegisterController extends Controller
{
    public function showRegister(){
    	return view('register');
    }

    public function handleRegister(){
    	$data = Input::all();
        $check_exit_mail=User::where('email','like', $data['email'])->first();
        if($check_exit_mail){
            return back()->with('error','Email address already taken');
        }
        else{
            User::create([//insertion des données
               'firstName'=>$data['firstname'],
               'lastName'=>$data['lastname'],
               'birthdate'=>$data['birthdate'],
               'address'=>$data['address'],
               'email'=>$data['email'],
               'password'=>bcrypt($data['password'])
            ]);
            return redirect(url('home'));
        }
    }

}
