<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Catge;
use App\Models\Productin;
use App\Models\Productou;
use Illuminate\support\Facades\DB;
class Dashboard extends Controller
{
    public function home(){
        $catg = DB::table('category')->orderBy('id','desc')->get();
        $data = DB::table('productin as p')
        ->select( 'p.name','p.model_no', DB::raw('COALESCE(SUM(p.quantity),0) as inproduct'),
            DB::raw('COALESCE(SUM(po.quantity),0) as outproduct'),
            DB::raw('COALESCE(SUM(p.quantity),0) - COALESCE(SUM(po.quantity),0) as diffrent') )->leftJoin('Productout as po', function($join){ $join->on('p.name', '=' ,'po.name')->on('p.model_no', '=', 'po.model_no');})->groupBy('p.name','p.model_no')->get();
      

        return view('admin.home',compact('catg','data'));
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
    public function productout(){
        // $catg = DB::table('category')->orderBy('id','desc')->get();
        $product = DB::table('productout')->orderBy('id','desc')->get();
        $da = DB::table('productin as p')->select('p.name')->groupBy('p.name')->get();
        $dat = DB::table('productin as p')->select('p.model_no')->groupBy('p.model_no')->get();
        return view('admin.productout',compact('product','da','dat'));
    }

}