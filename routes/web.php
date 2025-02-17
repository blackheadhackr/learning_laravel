<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard;
use App\Http\Controllers\Catg;
use App\Http\Controllers\Product;
use App\Http\Controllers\Productout;
use App\Http\Controllers\Login;

Route::get('/', function () {
    return view('welcome');
});
Route::get('login', function () {
    return view('welcome');
});
// <============  Login   ============>
Route::post('login',[Login::class , 'userlogin'])->name('user-login');
Route::get('log-out',[Login::class , 'logout'])->name('logout');
// <============  session check middleware apply   ============>
Route::middleware('sessioncheck')->group(function(){
    Route::get('dashboard', [dashboard::class , 'home'] );
    Route::get('category', [dashboard::class , 'category'] );
    Route::get('product', [dashboard::class , 'product'] );
    Route::post('add-catg',[Catg::class, 'add_catg']);
    Route::post('edit-catg',[Catg::class, 'edit_catg']);
    Route::post('getdata',[Catg::class, 'singledata'])->name('single');
    Route::post('deldata',[Catg::class, 'deldata'])->name('deleterecord');
    // products In route from here =================>
    Route::post('add-product',[Product::class , 'addproduct'])->name('insertproduct');
    Route::post('get-single-product',[Product::class , 'get_product'])->name('singleproduct');
    Route::post('update',[Product::class , 'update_product'])->name('updateproduct');
    Route::post('deleteproduct',[Product::class , 'delete_prduct'])->name('deleteproduct');
    // products Out route from here =================>
    Route::get('product-out', [Dashboard::class , 'productout']);
    Route::post('out-data',[Productout::class, 'out_product'])->name('outprod');
    Route::post('single-product-out',[Productout::class , 'get_single'])->name('singleoutproduct');
    Route::post('update-out-data',[Productout::class , 'outdata_update'])->name('out_update');
    Route::post('delete-out-data',[Productout::class , 'outdata_delete'])->name('out_delete');
    // testing ====================================================>
    Route::get('out-data',[Productout::class, 'join']);
});
// Route::get('dashboard', [dashboard::class , 'home'] );
// Route::get('category', [dashboard::class , 'category'] );
// Route::get('product', [dashboard::class , 'product'] );
// Route::post('add-catg',[Catg::class, 'add_catg']);
// Route::post('edit-catg',[Catg::class, 'edit_catg']);
// Route::post('getdata',[Catg::class, 'singledata'])->name('single');
// Route::post('deldata',[Catg::class, 'deldata'])->name('deleterecord');
// // products In route from here =================>
// Route::post('add-product',[Product::class , 'addproduct'])->name('insertproduct');
// Route::post('get-single-product',[Product::class , 'get_product'])->name('singleproduct');
// Route::post('update',[Product::class , 'update_product'])->name('updateproduct');
// Route::post('deleteproduct',[Product::class , 'delete_prduct'])->name('deleteproduct');
// // products Out route from here =================>
// Route::get('product-out', [Dashboard::class , 'productout']);
// Route::post('out-data',[Productout::class, 'out_product'])->name('outprod');
// Route::post('single-product-out',[Productout::class , 'get_single'])->name('singleoutproduct');
// Route::post('update-out-data',[Productout::class , 'outdata_update'])->name('out_update');
// Route::post('delete-out-data',[Productout::class , 'outdata_delete'])->name('out_delete');
// // <============  Login   ============>
// Route::post('login',[Login::class , 'userlogin'])->name('user-login');

// // testing ====================================================>
// Route::get('out-data',[Productout::class, 'join']);

