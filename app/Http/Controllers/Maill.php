<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\facades\Mail;
use  App\Mail\Welcomemail;

class Maill extends Controller
{
    public function mail(){
        // $to = "website.lappymaker@gmail.com";
        $to = "khanmobee5719@gmail.com";
        $sub = "this is testing web mail using laravel by Dharmender Kumar";
        $msg = "testing mail please do not react or not respond on this mail thankyou";
        
        Mail::to($to)->send(new Welcomemail($msg, $sub));
    }
}
