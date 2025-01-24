<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Catg extends Controller
{
    public function add_catg(Request $req){
        print_r($req->input());
        echo "<pre>";
        print_r($req->file('modelimg'));
    }
}
