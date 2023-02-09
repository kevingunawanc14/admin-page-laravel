<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;

class ProductDetail extends Controller
{ 
    public function index()
    {

      

    }

    public function detailData($nama){
        return view('user/product-detail',
        ["dataDetail" => Produk::detailProduk($nama)]);
    }
}
