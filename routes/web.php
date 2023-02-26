<?php

use App\Models\Produk;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductDetail;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ViewUserController;


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

// Navigasi
// Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/profileUser', [ViewUserController::class, 'profileUser'])->name('profileUser');
Route::get('/viewAllUser', [UserController::class, 'viewAllUser'])->name('viewAllUser');
// Route::get('/viewAllProduct', [ProductController::class, 'index'])->name('index');

// User
// login page
Route::get('/', [UserController::class, 'loginPage'])->name('loginPage');
// login function
Route::post('login', [UserController::class, 'authenticate'])->name('actionLogin');


// User
// delete data user
Route::get('/profileUser/hapus/{id_user}', [UserController::class, 'hapusUser'])->name('hapusUser');
// delete all row
Route::get('/profileUser/deleteAllUser', [UserController::class, 'deleteAllUser'])->name('deleteAllUser');
// add data user
Route::post('user/addDataUser', [UserController::class, 'addUser'])->name('addUser');
// update data user
Route::get('updateUser/{id_user}', [UserController::class, 'updateUser'])->name('updateUser');
// page add data user
Route::get('user/addPage', [UserController::class, 'openAddPage'])->name('openAddPage');
// page update
Route::get('user/updatePage/{id_user}', [UserController::class, 'openUpdatePage'])->name('updatePage');
// update data user
Route::post('user/updatePage', [UserController::class, 'updateUser'])->name('updateDataUser');

// Produk













// 1 model menuju ke 1 instance dengan berbagai fungsi sesuai

// Route::post('actionlogin', [LoginController::class, 'actionlogin'])->name('actionlogin');

// Route::get('home', [HomeController::class, 'index'])->name('home')->middleware('auth');
// Route::get('actionlogout', [LoginController::class, 'actionlogout'])->name('actionlogout')->middleware('auth');