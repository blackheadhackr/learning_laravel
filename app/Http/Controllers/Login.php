<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserLogin;
use Illuminate\Support\Facades\Auth;

class Login extends Controller
{
    public function userlogin(Request $req){
        // return $req->input();
        $validate = $req->validate([
            'email' => 'required|email',
            'pass' => 'required'
        ],[
            'required' => 'Please fill this feild',
            'email' => 'Incorrect email adress'
        ]);
        if($validate){
            $email = $req->email;
            $pass = $req->pass;
            $data = UserLogin::where('email',$email)->first();

            if($data && $data->password = $pass){
                $req->session()->put(['name' => $data->name]);
                return redirect('dashboard')->with('login', 'Please Enjoy, You are logged in Successdully!');
            }else{
                return redirect('login')->with('error', 'These credentials do not match our records.');
            }

        }
    }
    public function logout(){
        auth()->logout();
        session()->flush();
        return redirect('login');
    }
}