<?php

namespace App\Http\Controllers\Api;

use App\Models\Catalog;
use App\Models\Product;
use App\Models\Team;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\PostResource;

class PostController extends Controller
{

    public function getProduct(){
        $posts = Product::select('*')->get();
        return new PostResource(true,'List Data Product',$posts);
    }

    public function getTeam(){
        $posts = Team::select('*')->get();
        return new PostResource(true,'List Data Team',$posts);
    }

    public function getCatalog(){
        $posts = Catalog::select('*')->get();
        return new PostResource(true,'List Data Catalog',$posts);
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   
}
