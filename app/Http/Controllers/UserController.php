<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function tampiluser()
    {
       $user = User::select('*')
                 ->get();
       return view('user/user', ['user' => $user]);
    }
}
