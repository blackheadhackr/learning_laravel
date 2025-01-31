<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Productin;
use App\Models\Catge;
use Illuminate\support\Facades\DB;

class Product extends Controller
{
    public function addproduct(Request $req){
        // return $req->input();exit;
        $data = new Productin;
        $data->name = $req->input('name');
        $data->model_no = $req->input('modelno');
        $data->received = $req->input('receive');
        $data->dealer = $req->input('dealer');
        $data->quantity = $req->input('quantity');
        $data->date = $req->input('date');
        if($data->save()){
            return redirect('product')->with('success','New Record Created Successfully!');
        }else{
            return redirect('product')->with('success','Something went wrong Error!');
        }
    }
}
