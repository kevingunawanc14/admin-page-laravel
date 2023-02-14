<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index()
    {
        return view('user/user');
    }

    public function viewAllUser()
    {
        $user = User::select('*')->get();
        

        return view('user/user', ['user' => $user]);
    }

    public function hapusUser($id_user)
    {
        $user = User::where('id_user', $id_user)
        ->delete();

        return redirect()->route('viewAllUser');
    }

    public function addUser(){
        

        $user = User::create([
            'nama' => generateRandomString(),
            'alamat' => generateRandomString(),
            'email' => generateRandomString(),
            'status' => generateRandomString(),
            'password' => generateRandomString()
        ]);

        return redirect()->route('viewAllUser');
    }

    public function deleteAllUser(){
        
        DB::table('user')->truncate();

        return redirect()->route('viewAllUser');

    }


    
    
}

function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[random_int(0, $charactersLength - 1)];
    }
    return $randomString;
}
