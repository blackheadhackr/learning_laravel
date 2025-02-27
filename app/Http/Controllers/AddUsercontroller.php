<?php

namespace App\Http\Controllers;
use App\Models\Usermodel;
use Illuminate\Http\Request;

class AddUsercontroller extends Controller
{
    public function adduser(Request $req){
        return view('admin.useradd');
    }
    public function adddata(Request $req){
       $validate = $req->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'pass' => 'required',
            'Cpass' => 'required|same:pass',
        ],[
            'required' => 'Please fill this feild. This feild is mendetatory...',
            'unique' => 'This Email Address is already taken',
            'email' => 'Incorrect email Please fill valid email',
            'same' => 'Confirm Password doesnot match',
        ]);
        if($validate){
            $data = new Usermodel;
            $data->name = $req->input('name');
            $data->email = $req->input('email');
            $data->password = $req->input('pass');
            $data->remember_token = rand(99999,999999);
            if($data->save()){
                return redirect('load-user')->with('msg', 'New user added successfully');
            }else{
                return redirect('load-user')->with('msgg', 'something went wrong please wait we are working on this');
            }
        }else{
            return Redirect::to('load-user')->withErrors($validator);
        }
    }
    public function alluser(Request $req){
        $userdata = Usermodel::all();
        return $userdata;
    }
}
