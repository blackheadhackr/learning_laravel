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
            return redirect('product')->with('error','Error! Something went wrong...');
        }
    }
    public function get_product(Request $req){
        $id = $req->input('id');
        $data = Productin::find($id);
        return response()->json($data);
    }
    public function update_product(Request $req){
        $id = $req->input('id');
        $data = Productin::find($id);
        $data->name = $req->input('editname');
        $data->model_no = $req->input('editmodelno');
        $data->received = $req->input('editreceive');
        $data->dealer = $req->input('editdealer');
        $data->quantity = $req->input('editquantity');
        $data->date = $req->input('editdate');
        if($data->save()){
            return redirect('product')->with('success','Data Updated Successfully!');
        }else{
            return redirect('product')->with('error','Error! Something went wrong...');
        }
    }
}
