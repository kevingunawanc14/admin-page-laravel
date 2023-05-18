<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\PostController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('team',[PostController::class,'getTeam']);
Route::get('product',[PostController::class,'getProduct']);
Route::get('catalog',[PostController::class,'getCatalog']);
Route::post('test1', [PostController::class, 'submitContact']);
Route::post('getIpAndPagename', [PostController::class, 'getIpAndPagename']);


Route::get('test', function () {
    dd("*77*");
    return 'This is a test';
})->name('test');

Route::post('api/test2', function (Request $request) {
    // Retrieve the form data from the POST request
    dd("****");

    $nama = $request->input('nama');
    $email = $request->input('email');
    $message = $request->input('message');
    // Do something with the form data (e.g. send an email)
    
    // Return a response to the client
    return response()->json(['success' => true]);
  });

