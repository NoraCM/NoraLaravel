<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;


class PersonnalInformationController extends Controller
{
    public function showPersonnalInformation(){
    	$details=User::find(Auth::user()->id);  
        return view('personnalinformation',['result'=>$details]);
    }

    public function showPersonnalInformationForm(){
        $details=User::find(Auth::user()->id);  
        return view('personnalinformationform',['result'=>$details]);
    }

    public function updatePersonnalInformation(){
        $data = Input::all();
        $updated=User::whereId(Auth::user()->id)->update([//insertion des données
            'firstName'=>$data['firstname'],
            'lastName'=>$data['lastname'],
            'birthdate'=>$data['birthdate'],
            'address'=>$data['address']
        ]);
        if($updated){
            return redirect(url('personnal-information'))->with('success','Your informations have been updated'); 
        } 

    }

}
