<?php

use App\Http\Controllers\ProductDetail;
use App\Models\Produk;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ViewUserController;
use App\Http\Controllers\UserController;


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

// Route::get('/', function () {
//     return view('welcome');
// });


// Route::get('/a', function () {

//     $data2 = ["a","b","c"];

//     // $data3 = [
//     // ["angka" => 1
//     // ,"nama" => "a"],
//     // ["angka" => 2
//     // ,"nama" => "b"],
//     // ["angka" => 3
//     // ,"nama" => "c"]];
    
//     return view('a', [
//     "data1" => "test123" ,
//     "data2" => coba::all()
//     ]);


// });

// Route::get('/b', function () {
//     return view('template');
// });

// Route::get('/c', function () {
//     return view('c');
// });

// Route::get('user/view', function () {
//     return view('user/view');
// });


// Route::get('user/add', function () {
//     return view('user/add');
// });

// Route::get('user/product', function () {
//     return view('user/product',[
//         "nama" => Produk::all()
//     ]);
// });

// Route::get('user/product/{nama}',[ProductDetail::class,'detailData']);

// Route::get('user/tampil',[UserController::class,'tampiluser'])->name('tampiluser');

Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/profileUser', [ViewUserController::class, 'profileUser'])->name('profileUser');
Route::get('/viewAllUser', [UserController::class, 'viewAllUser'])->name('viewAllUser');
Route::get('/viewAllProduct', [ProductController::class, 'index'])->name('index');

// delete data user
Route::get('/profileUser/hapus/{id_user}', [UserController::class, 'hapusUser'])->name('hapusUser');
// add data user
Route::get('/profileUser/add', [UserController::class, 'addUser'])->name('addUser');
// update data user


// 1 model menuju ke 1 instance dengan berbagai fungsi sesuai

// Route::post('actionlogin', [LoginController::class, 'actionlogin'])->name('actionlogin');

// Route::get('home', [HomeController::class, 'index'])->name('home')->middleware('auth');
// Route::get('actionlogout', [LoginController::class, 'actionlogout'])->name('actionlogout')->middleware('auth');