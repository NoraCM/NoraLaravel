<?php

namespace App\Http\Controllers;

use App\User;
use App\Message;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;


class MessagesController extends Controller
{
    public function showMessages(){
    	$result=Message::where([
            ['recipient_id','=',Auth::user()->id],
            ['status','=',0]
        ])->leftjoin('users','users.id','=','messages.sender_id')->get();
        return view('messages',['result'=>$result]);
    }

    public function sendMessage(){
        $data = Input::all();
        $sended=Message::create([//insertion des données
            'content'=>$data['message'],
            'recipient_id'=>$data['recipient_id'],
            'sender_id'=>Auth::user()->id,
        ]);
        if($sended){
            return redirect(url('personnal-messages'))->with('success','Your message has successfuly sent'); 
        } 

    }

}
