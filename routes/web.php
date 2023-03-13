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
Route::get('user/users', [UserController::class, 'usersPage'])->name('usersPage')->middleware('auth');
Route::get('user/users/delete-user/{id_user}', [UserController::class, 'deleteUser'])->name('deleteUser')->middleware('auth');
Route::get('user/users/delete-all-user', [UserController::class, 'deleteAllUser'])->name('deleteAllUser')->middleware('auth');
Route::get('user/users/add', [UserController::class, 'addUserPage'])->name('addUserPage')->middleware('auth');;
Route::post('user/users/add', [UserController::class, 'addUser'])->name('addUser');
Route::get('user/users/update/{id_user}', [UserController::class, 'updateUserPage'])->name('updateUserPage')->middleware('auth');
Route::post('user/users/update', [UserController::class, 'updateUser'])->name('updateUser')->middleware('auth');
Route::get('user/users/profile', [UserController::class, 'profileUserPage'])->name('profileUserPage')->middleware('auth');;

// Produk
Route::get('product', [ProductController::class, 'productPage'])->name('productPage')->middleware('auth');
Route::get('product/delete-user/{id_user}', [ProductController::class, 'deleteProduk'])->name('deleteProduk')->middleware('auth');
Route::get('product/add', [ProductController::class, 'addUserPage'])->name('addProdukPage')->middleware('auth');;
Route::post('product/add', [ProductController::class, 'addUser'])->name('addProduk');
Route::get('product/update/{id_user}', [ProductController::class, 'updateProdukPage'])->name('updateProdukPage')->middleware('auth');
Route::post('product/update', [ProductController::class, 'updateProduk'])->name('updateProduk')->middleware('auth');













