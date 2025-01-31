<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard;
use App\Http\Controllers\Catg;
use App\Http\Controllers\Product;

Route::get('/', function () {
    return view('welcome');
});
Route::get('dashboard', [dashboard::class , 'home'] );
Route::get('category', [dashboard::class , 'category'] );
Route::get('product', [dashboard::class , 'product'] );
Route::post('add-catg',[Catg::class, 'add_catg']);
Route::post('edit-catg',[Catg::class, 'edit_catg']);
Route::post('getdata',[Catg::class, 'singledata'])->name('single');
Route::post('deldata',[Catg::class, 'deldata'])->name('deleterecord');
// products route from here =================>
Route::post('add-product',[Product::class , 'addproduct'])->name('insertproduct');

