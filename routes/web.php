<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CatalogController;
use App\Http\Controllers\TeamController;

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
Route::get('product/delete-produk/{id_produk}', [ProductController::class, 'deleteProduk'])->name('deleteProduk')->middleware('auth');
Route::get('product/add', [ProductController::class, 'addProdukPage'])->name('addProdukPage')->middleware('auth');;
Route::post('product/add', [ProductController::class, 'addProduk'])->name('addProduk');
Route::get('product/update/{id_produk}', [ProductController::class, 'updateProdukPage'])->name('updateProdukPage')->middleware('auth');
Route::post('product/update', [ProductController::class, 'updateProduk'])->name('updateProduk')->middleware('auth');

// Katalog
Route::get('catalog/view', [CatalogController::class, 'catalogPage'])->name('catalogPage')->middleware('auth');
Route::get('catalog/delete-catalog/{id}', [CatalogController::class, 'deleteCatalog'])->name('deleteCatalog')->middleware('auth');
Route::get('catalog/add', [CatalogController::class, 'addCatalogPage'])->name('addCatalogPage')->middleware('auth');;
Route::post('catalog/add', [CatalogController::class, 'addCatalog'])->name('addCatalog');
Route::get('catalog/update/{id}', [CatalogController::class, 'updateCatalogPage'])->name('updateCatalogPage')->middleware('auth');
Route::post('catalog/update', [CatalogController::class, 'updateCatalog'])->name('updateCatalog')->middleware('auth');

// Team
Route::get('team/view', [TeamController::class, 'teamPage'])->name('teamPage')->middleware('auth');
Route::get('team/delete-team/{id}', [TeamController::class, 'deleteTeam'])->name('deleteTeam')->middleware('auth');
Route::get('team/add', [TeamController::class, 'addTeamPage'])->name('addTeamPage')->middleware('auth');;
Route::post('team/add', [TeamController::class, 'addTeam'])->name('addTeam');
Route::get('team/update/{id}', [TeamController::class, 'updateTeamPage'])->name('updateTeamPage')->middleware('auth');
Route::post('team/update', [TeamController::class, 'updateTeam'])->name('updateTeam')->middleware('auth');









