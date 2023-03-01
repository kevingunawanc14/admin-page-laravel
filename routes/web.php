<?php

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
Route::get('user/users/delete-user/{id_user}', [UserController::class, 'hapusUser'])->name('hapusUser')->middleware('auth');
Route::get('user/users/delete-all-user', [UserController::class, 'deleteAllUser'])->name('deleteAllUser')->middleware('auth');;
Route::get('user/users/add', [UserController::class, 'addUserPage'])->name('addUserPage')->middleware('auth');;
Route::post('user/users/add', [UserController::class, 'addUser'])->name('addUser');
Route::get('user/users/update/{id_user}', [UserController::class, 'updateUserPage'])->name('updateUserPage')->middleware('auth');
Route::get('user/users/updateUser/{id_user}', [UserController::class, 'updateUser'])->name('updateUser')->middleware('auth');
Route::post('user/users/user/updatePage', [UserController::class, 'updateUser'])->name('updateDataUser')->middleware('auth');

// Produk













