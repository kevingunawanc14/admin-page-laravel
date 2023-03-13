<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ProductController extends Controller
{
    public function produkPage()
    {
        $product = Product::select('*')->get();
        // $product = "a";

        return view('product/product', ['product' => $product]);
    }

    public function addProdukPage()
    {
        return view('product/add');
    }

    public function addProduk(Request $request)
    {

        $request->validate(
            [
                'nama' => ['required', 'min:1', Rule::unique('product')->ignore($request->id, 'id')],
                'harga' => 'required|min:2',
                'deskripsi' => 'required|min:1',
                'image' => 'required|min:1',
                'link' => 'required|min:1'
            ]
        );

        $produk = Product::create([
            'nama' => $request->nama,
            'harga' => $request->harga,
            'deksripsi' => $request->deksripsi,
            'image' => $request->image,
            'link' =>  $request->link


        ]);

        // return redirect()->route('viewuserdata')->with('message', 'Data update succeesfully');

        if ($produk) {
            return redirect()->route('productPage')->with('berhasil', 'Data berhasil di tambahkan');
        } else {
            return redirect()->route('productPage')->with('gagal', 'Data gagal di tambahkan');
        }
    }

    public function updateProdukPage($id)
    {

        $dataUpdate = Product::select('*')->where('id', $id)->first();

        return view('product/update', ['data' => $dataUpdate]);
    }

    public function updateProduk(Request $request)
    {


        $request->validate(
            [
                'nama' => ['required', 'min:1', Rule::unique('user')->ignore($request->id, 'id')],
                'harga' => 'required|min:1',
                'deskripsi' => 'required|email:dns',
                'image' => 'required|min:1',
                'link' => 'required|min:1',
                
            ]
        );

        $produk = Product::where('id', $request->id)->update(
            [
                'nama' => $request->nama,
                'harga' => $request->harga,
                'deskripsi' => $request->deskripsi,
                'image' => $request->image,
                'link' => $request->link,
            ]
        );

        if ($produk) {
            return redirect()->route('productPage')->with('berhasil', 'Data berhasil di update');
        } else {
            return redirect()->route('productPage')->with('gagal', 'Data gagal di update');
        }
    }

    public function deleteProduk($id)
    {
        $delete = Product::where('id', $id)
            ->delete();

        if ($delete) {
            return redirect()->route('productPage')->with('berhasil', 'Data berhasil di hapus');
        } else {
            return redirect()->route('productPage')->with('gagal', 'Data gagal di hapus');
        }
    }
}
