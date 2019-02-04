<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;


class MySpaceController extends Controller
{
    public function showmySpace(){
    	return view('myspace');
    }

}
