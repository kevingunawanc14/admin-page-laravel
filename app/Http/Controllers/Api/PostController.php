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
        $posts = Product::orderBy('id', 'desc')->get();
        foreach ($posts as $post){
            $post['image'] = asset('storage/' . $post->image);
        }
        return new PostResource(true,'List Data Product',$posts);

        // $data = [];
        // foreach ($posts as $post) {
        //     $post['image'] = asset('storage/' . $post->image);
        //     $data[] = new PostResource(true, 'Data Product', $post);
        // }
    
        // return $data;

    }

    public function getTeam(){
        $posts = Team::orderBy('id', 'desc')->get();
        // dd($posts);

        foreach ($posts as $post){
            $post['image'] = asset('storage/' . $post->image);
        }

        // $data = [];
        // foreach ($posts as $post) {
        //     $post['image'] = asset('storage/' . $post->image);
        //     $data[] = new PostResource(true, 'Data Team', $post);
        // }
    
        // return $data;

     
        return new PostResource(true,'List Data Team',$posts);
    }

    public function getCatalog(){
        $posts = Catalog::orderBy('id', 'desc')->get();
        foreach ($posts as $post){
            $post['image'] = asset('storage/' . $post->image);
            $post['pdf'] = asset('storage/' . $post->pdf);

        }
        // foreach ($posts as $posts){
        //     $posts['pdf'] = asset('storage/' . $posts->pdf);
        // }
        return new PostResource(true,'List Data Catalog',$posts);
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   
}
