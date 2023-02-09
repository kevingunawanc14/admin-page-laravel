<?php

use App\Http\Controllers\ProductDetail;
use App\Models\Produk;
use Illuminate\Support\Facades\Route;
// use App\Models\Produk;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/a', function () {

    $data2 = ["a","b","c"];

    // $data3 = [
    // ["angka" => 1
    // ,"nama" => "a"],
    // ["angka" => 2
    // ,"nama" => "b"],
    // ["angka" => 3
    // ,"nama" => "c"]];
    
    return view('a', [
    "data1" => "test123" ,
    "data2" => coba::all()
    ]);


});

Route::get('/b', function () {
    return view('template');
});

Route::get('/c', function () {
    return view('c');
});

Route::get('user/view', function () {
    return view('user/view');
});


Route::get('user/add', function () {
    return view('user/add');
});

Route::get('user/product', function () {
    return view('user/product',[
        "nama" => Produk::all()
    ]);
});

Route::get('user/product/{nama}',[ProductDetail::class,'detailData']);