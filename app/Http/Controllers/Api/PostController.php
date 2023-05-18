<?php

namespace App\Http\Controllers\Api;

use App\Models\Catalog;
use App\Models\Product;
use App\Models\Team;
use App\Models\Inbox;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\PostResource;
use App\Models\Statistic;
use Illuminate\Support\Facades\Validator;

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

    public function submitContact(Request $request)
    {
        // dd($request);

        $validator = Validator::make($request->all(), [
            'nama' => 'required|min:1',
            'email' => 'required|email',
            'pesan' => 'required|min:1',
        ]);
    
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }
    
        Inbox::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'pesan' => $request->pesan,
        ]);
    
        return response()->json(['success' => true]);


    }

    public function getIpAndPagename(Request $request)
    {
        // dd($request);
    
        Statistic::create([
            'ip' => $request->pageURL,
            'page' => $request->ipAddress
        ]);
    
        return response()->json(['success' => true]);


    }




    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   
}
