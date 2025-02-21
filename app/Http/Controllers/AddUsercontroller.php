<?php

namespace App\Http\Controllers;
use App\Models\Usermodel;
use Illuminate\Http\Request;

class AddUsercontroller extends Controller
{
    public function adduser(Request $req){
        return view('admin.useradd');
    }
    public function alluser(Request $req){
        $userdata = Usermodel::all();
        return $userdata;
    }
}
