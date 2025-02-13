<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Productou;

class Productout extends Controller
{
    public function out_product(Request $req){
        return $req->validate([
            'name' => 'required',
            'modelno' => 'required',
            'alloted' => 'required',
            'ticketno' => 'required',
            'quantity' => 'required',
            'date' => 'required',
        ],[
            'required' => 'This feild is required please fill this first'
        ]);
    }
}
