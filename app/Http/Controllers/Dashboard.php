<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Catg;
class Dashboard extends Controller
{
    public function home(){
        return view('admin.home');
    }
    public function category(){
        return view('admin.category');
    }
}
