<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Team;
use Illuminate\Http\Request;

class PostsController extends Controller
{

    public function getProduct(){
        $posts = Product::select('*')->get();
        return new PostResource(true,'List Data Product',$posts);
    }

    public function getTeam(){
        $posts = Team::select('*')->get();
        return new PostResource(true,'List Data Team',$posts);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   
}
