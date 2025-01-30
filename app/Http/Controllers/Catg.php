<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Catge;
use Illuminate\support\Facades\DB;

class Catg extends Controller
{
    public function add_catg(Request $req){
        $validate = $req->validate([
            'name' => 'required',
            'quality' => 'required',
            'model' => 'required',
            'modelimg' => 'required',
        ],[
            'required' => 'Please fill this feild'
        ]);
        if($validate){
            $a = $req->file('modelimg');
            $path = $req->file('modelimg')->store("storage","public");
            $img = explode('/',$path);
            $imgname = $img[1];
            // return view('admin.image',['imag' => $imgname]);
            $data = new Catge();
            $data->name = $req->input('name');
            $data->quality = $req->input('quality');
            $data->model_no = $req->input('model');
            $data->img_name = $imgname;
            $data->save();
            return redirect('category');


        }
       
    }
    public function edit_catg(Request $req){
        echo "this is category edit function";
    }
    public function singledata(Request $req){
        $id =$req->input('id');
        $data = DB::table('category')->where('id',$id)->first();
        return response()->json($data);
    }
}
