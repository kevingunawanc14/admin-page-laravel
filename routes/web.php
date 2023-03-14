<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;


// User
Route::get('/', function(){
    return redirect()->route('loginPage');
});
Route::get('login', [UserController::class, 'loginPage'])->name('loginPage');
Route::post('login', [UserController::class, 'authenticate'])->name('authenticate');
Route::get('logout', [UserController::class, 'logout'])->name('logout');
Route::get('user/view', [UserController::class, 'usersPage'])->name('usersPage')->middleware('auth');
Route::get('user/view/delete-user/{id_user}', [UserController::class, 'deleteUser'])->name('deleteUser')->middleware('auth');
Route::get('user/view/delete-all-user', [UserController::class, 'deleteAllUser'])->name('deleteAllUser')->middleware('auth');
Route::get('user/view/add', [UserController::class, 'addUserPage'])->name('addUserPage')->middleware('auth');;
Route::post('user/view/add', [UserController::class, 'addUser'])->name('addUser');
Route::get('user/view/update/{id_user}', [UserController::class, 'updateUserPage'])->name('updateUserPage')->middleware('auth');
Route::post('user/view/update', [UserController::class, 'updateUser'])->name('updateUser')->middleware('auth');
Route::get('user/view/profile', [UserController::class, 'profileUserPage'])->name('profileUserPage')->middleware('auth');;

// Produk
Route::get('product/view', [ProductController::class, 'produkPage'])->name('produkPage')->middleware('auth');
Route::get('product/delete-produk/{id_user}', [ProductController::class, 'deleteProduk'])->name('deleteProduk')->middleware('auth');
Route::get('product/add', [ProductController::class, 'addProdukPage'])->name('addProdukPage')->middleware('auth');;
Route::post('product/add', [ProductController::class, 'addProduk'])->name('addProduk');
Route::get('product/update/{id_user}', [ProductController::class, 'updateProdukPage'])->name('updateProdukPage')->middleware('auth');
Route::post('product/update', [ProductController::class, 'updateProduk'])->name('updateProduk')->middleware('auth');













