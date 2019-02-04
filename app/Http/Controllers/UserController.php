<?php

namespace App\Http\Controllers;

use App\User;
use App\Message;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;


class UserController extends Controller
{

    public function showUsers(){
        $users=User::where('id','<>',Auth::user()->id)->get();
        return view('users',['users'=>$users]);
    }


    public function messageForm($recipient_id){
        return view('messageform',['to'=>$recipient_id]);
    }
}
