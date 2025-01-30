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
        // return $req->input();exit;
        if($req->file('editmodelimg') != null){
            $validate = $req->validate([
                'editname' => 'required',
                'editquality' => 'required',
                'editmodel' => 'required',
                'editmodelimg' => ['required', 'extensions:jpg,png,webp'],
            ],[
                'required' => 'Please fill this feild'
            ]);

            if($validate){
                $id = $req->input('id');
    
                $editpath = $req->file('editmodelimg')->store('storage','public');
                $image = explode('/',$editpath);
                $imagename = $image[1];
    
    
                $data = Catge::find($id);
                if($data){
                    $data->update([
                        'name' => $req->input('editname'),
                        'quality' => $req->input('editquality'),
                        'model_no' => $req->input('editmodel'),
                        'img_name' => $imagename,
                    ]);
                    return redirect('category');
                }
            }
        }else{
            $validate = $req->validate([
                'editname' => 'required',
                'editquality' => 'required',
                'editmodel' => 'required',
            ],[
                'required' => 'Please fill this feild'
            ]);

            if($validate){
                $id = $req->input('id'); 
    
                $data = Catge::find($id);
                if($data){
                    $data->update([
                        'name' => $req->input('editname'),
                        'quality' => $req->input('editquality'),
                        'model_no' => $req->input('editmodel'),
                    ]);
                    return redirect('category');
                }
            }
        }
        

        
        
        
    }
    public function singledata(Request $req){
        $id =$req->input('id');
        $data = DB::table('category')->where('id',$id)->first();
        return response()->json($data);
    }
}
