<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function showHome(){
    	if(!Auth::user()){
    	    return view('home');
    	}
    	else{
    		return view('myspace');
    	}    
    }
}
