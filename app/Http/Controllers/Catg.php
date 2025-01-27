<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Catg extends Controller
{
    public function add_catg(Request $req){
        $validate = $req->validate([
            'name' => 'required',
            'quality' => 'required',
            'model' => 'required',
            'modelimg' => 'required',
        ],[
            'required' => 'Please fill this feild'
        ]);
        if($validate){
            $a = $req->file('modelimg');
            $path = $req->file('modelimg')->store("storage","public");
            $img = explode('/',$path);
            $imgname = $img[1];
            return view('image',['imag' => $imgname]);

        }
        
        exit;
        print_r($req->input());
        echo "<pre>";
        print_r($req->file('modelimg'));
    }
}
