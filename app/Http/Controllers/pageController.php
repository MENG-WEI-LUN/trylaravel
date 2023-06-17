<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pageController extends Controller
{
    public function index( )
    {
        
        return view('home',['test'=>'1234567']);
    }

    public function tryin( $id = 3 )
    {
        // if($id > 3) $id = 1;
        if($id > 3) {
            return redirect('home/1');
        }
        $imgSrc = asset("img/dog".$id.".jpg");
        return view('home',[
            'imgSrc'=>$imgSrc,
            'test'=>'show image!!'.$id,
            'id'=>$id
            ]);

    }
}
