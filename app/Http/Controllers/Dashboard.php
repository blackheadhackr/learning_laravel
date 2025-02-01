<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Catge;
use App\Models\Productin;
use Illuminate\support\Facades\DB;
class Dashboard extends Controller
{
    public function home(){
        $catg = DB::table('category')->orderBy('id','desc')->get();
        $product = Productin::select('name','model_no',DB::raw('sum(quantity) as total_product'))->groupBy('name','model_no')->get();

        return view('admin.home',compact('catg','product'));
    }
    public function category(Request $req){
        $catg = DB::table('category')->orderBy('id','desc')->get();
        return view('admin.category',['catg'=>$catg]);
    }
    public function product(Request $req){
        $catg = DB::table('category')->orderBy('id','desc')->get();
        $product = DB::table('productin')->orderBy('id','desc')->get();
        return view('admin.productin',compact('catg','product'));
    }

}