<?php

namespace App\Http\Controllers;

use App\User;
use App\Picture;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Intervention\Image\Facades\Image;

class PicturesController extends Controller
{
    public function showPictures(){
        $result=Picture::where('user_id','=',Auth::user()->id)->get();
        return view('pictures',['result'=>$result]);
    }

    public function handlePictures(){ 
    	$data = Input::all();
    	$photo=str_random(10).'.'.$data['photo']->getClientOriginalExtension();
        $imagepath=public_path('storage/'.$photo);
        Image::make($data['photo']->getRealPath())->save($imagepath);
    	Picture::create([
            'source'=>$photo,
            'user_id'=>Auth::user()->id,
    	]);
        return back();
    }

    public function deletePicture($id){
         $deleted=Picture::find($id);
         $deleted->delete();
         return back();
    }
}
