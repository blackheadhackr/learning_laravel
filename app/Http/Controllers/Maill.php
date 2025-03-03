<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\facades\Mail;
use  App\Mail\Welcomemail;

class Maill extends Controller
{
    public function mail(){
        $to = "roshanwebtec@gmail.com";
        // $to = "khanmobee5719@gmail.com";
        $sub = "this is testing web mail using laravel by Dharmender Kumar";
        $msg = "Bhai mai sending mail test kr rha hu tere pass pahuch jaye mail to please whatsapp pr message kr diyo Dharmender";
        
        Mail::to($to)->send(new Welcomemail($msg, $sub));
    }
}
