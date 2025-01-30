<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Catge;
use Illuminate\support\Facades\DB;
class Dashboard extends Controller
{
    public function home(){
        $catg = DB::table('category')->orderBy('id','desc')->get();
        return view('admin.home',['catg'=>$catg]);
    }
    public function category(Request $req){
        $catg = DB::table('category')->orderBy('id','desc')->get();
        return view('admin.category',['catg'=>$catg]);
    }
}
