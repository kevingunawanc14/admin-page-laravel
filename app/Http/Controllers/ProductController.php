<?php

namespace App\Http\Controllers;

use App\Models\Product;
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
            'deskripsi' => $request->deskripsi,
            'image' => $request->image,
            'link' =>  $request->link


        ]);

        // return redirect()->route('viewuserdata')->with('message', 'Data update succeesfully');

        if ($produk) {
            return redirect()->route('produkPage')->with('berhasil', 'Data berhasil di tambahkan');
        } else {
            return redirect()->route('produkPage')->with('gagal', 'Data gagal di tambahkan');
        }
    }

    public function updateProdukPage($id)
    {

        $dataUpdate = Product::select('*')->where('id', $id)->first();

        return view('product/update', ['data' => $dataUpdate]);
    }

    public function updateProduk(Request $request)
    {

        // dd($request);

        // dd("*");

        $request->validate(
            [
                'nama' => ['required', 'min:1', Rule::unique('product')->ignore($request->id, 'id')],
                'harga' => 'required|min:1',
                'deskripsi' => 'required|min:1',
                'image' => 'required|min:1',
                'link' => 'required|min:1'

            ]
        );

        // dd("*");

        $produk = Product::where('id', $request->id)->update(
            [
                'nama' => $request->nama,
                'harga' => $request->harga,
                'deskripsi' => $request->deskripsi,
                'image' => $request->image,
                'link' => $request->link
            ]
        );


        if ($produk) {
            return redirect()->route('produkPage')->with('berhasil', 'Data berhasil di update');
        } else {
            return redirect()->route('produkPage')->with('gagal', 'Data gagal di update');
        }
    }

    public function deleteProduk($id)
    {
        $delete = Product::where('id', $id)
            ->delete();

        // dd($delete);

        if ($delete) {
            return redirect()->route('produkPage')->with('berhasil', 'Data berhasil di hapus');
        } else {
            return redirect()->route('produkPage')->with('gagal', 'Data gagal di hapus');
        }
    }
}
