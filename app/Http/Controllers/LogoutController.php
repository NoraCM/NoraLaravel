<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;


class LogoutController extends Controller
{
    public function handleLogout(){
        Auth::logout();
        return redirect(url('home'));  
    }

}
