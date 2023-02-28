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
Route::get('user/users', [UserController::class, 'usersPage'])->name('usersPage');
Route::get('profileUser/hapus/{id_user}', [UserController::class, 'hapusUser'])->name('hapusUser');
Route::get('profileUser/deleteAllUser', [UserController::class, 'deleteAllUser'])->name('deleteAllUser');
Route::post('user/addDataUser', [UserController::class, 'addUser'])->name('addUser');
Route::get('updateUser/{id_user}', [UserController::class, 'updateUser'])->name('updateUser');
Route::get('user/addPage', [UserController::class, 'openAddPage'])->name('openAddPage');
Route::get('user/updatePage/{id_user}', [UserController::class, 'openUpdatePage'])->name('updatePage');
Route::post('user/updatePage', [UserController::class, 'updateUser'])->name('updateDataUser');

// Produk













