<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Productou;

class Productout extends Controller
{
    public function out_product(Request $req){
        $validation =  $req->validate([
            'name' => 'required',
            'modelno' => 'required',
            'alloted' => 'required',
            'ticketno' => 'required',
            'quantity' => 'required',
            'date' => 'required',
        ],[
            'required' => 'This feild is required please fill this first'
        ]);
        if($validation){
            $table = new Productou;
            $table->name = $req->input('name');
            $table->model_no = $req->input('modelno');
            $table->alloted_to = $req->input('alloted');
            $table->ticket_no = $req->input('ticketno');
            $table->quantity = $req->input('quantity');
            $table->date = $req->input('date');
            if($table->save()){
                return redirect('product-out')->with('success','success full Thankyou!');
            }else{
                return redirect('product-out')->with('error','Something went wrong please check your form');
            }
        }else{
            return redirect('product-out')->with('error','Something went wrong please check your form');
        }
    }
}
