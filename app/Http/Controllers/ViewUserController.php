<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ViewUserController extends Controller
{

    public function index()
    {
        return view('user/view');
    }

    public function profileUser()
    {
        $user = User::select('*')->where('id_user', '=', 1)->get();
        
        $user = collect($user);

        return view('user/view', ['user' => $user->first()]);
    }
}
