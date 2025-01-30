<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard;
use App\Http\Controllers\Catg;
Route::get('/', function () {
    return view('welcome');
});
Route::get('dashboard', [dashboard::class , 'home'] );
Route::get('category', [dashboard::class , 'category'] );
Route::post('add-catg',[Catg::class, 'add_catg']);
Route::post('edit-catg',[Catg::class, 'edit_catg']);
Route::post('getdata',[Catg::class, 'singledata'])->name('single');
