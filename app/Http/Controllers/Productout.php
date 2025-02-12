<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Productou;

class Productout extends Controller
{
    public function out_product(Request $req){
        $table = Productou::all();
        return $table;
    }
}
