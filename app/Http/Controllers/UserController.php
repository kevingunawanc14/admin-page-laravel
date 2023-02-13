<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

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
    
}
