<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function produkPage()
    {
        $product = Product::orderBy('id', 'desc')->get();
        // $product = "a";

        return view('product/product', ['product' => $product]);
    }

    public function addProdukPage()
    {
        return view('product/add');
    }

    public function addProduk(Request $request)
    {
        // dd($request);    

        // return $request->file('image')->store('post-image');

        $request->validate(
            [
                'nama' => ['required', 'min:1', Rule::unique('product')->ignore($request->id, 'id')],
                'harga' => 'required|min:1',
                'deskripsi' => 'required|min:1',
                'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
                'link' => 'required|min:1'

            ]
        );

        $imageName = $request->file('image')->store('folderImageProduct');

        $produk = Product::create([
            'nama' => $request->nama,
            'harga' => $request->harga,
            'deskripsi' => $request->deskripsi,
            'image' => $imageName,
            'link' =>  $request->link,
            'status' => $request->status != "" ? "1" : "0"


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

        $product = Product::select('*')->where('id', $request->id)->first();

        // $a = Storage::delete(public_path()$product['images']);
        // dd($product);
        // dd($product['image']);

        // dd(public_path('storage/'.$product['image']));

        // Storage::exists(public_path('storage/'.$product['image']))

        if ($request->image != "") {
            if (Storage::exists($product['image'])) {
                // dd("path ditemukan");
                Storage::delete($product['image']);
            } else {
                // dd("path tidak ditemukan");
            }


            $request->validate(
                [
                    'nama' => ['required', 'min:1', Rule::unique('product')->ignore($request->id, 'id')],
                    'harga' => 'required|min:1',
                    'deskripsi' => 'required|min:1',
                    'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
                    'link' => 'required|min:1'

                ]
            );

            $imageName = $request->file('image')->store('folderImageProduct');
        } else {

            $imageName = $request->imageLama;


            $request->validate(
                [
                    'nama' => ['required', 'min:1', Rule::unique('product')->ignore($request->id, 'id')],
                    'harga' => 'required|min:1',
                    'deskripsi' => 'required|min:1',
                    'link' => 'required|min:1'

                ]
            );
        }

        // dd($imageName);

        // dd($product);

        // dd($a);


        // dd("*");

        $produk = Product::where('id', $request->id)->update(
            [
                'nama' => $request->nama,
                'harga' => $request->harga,
                'deskripsi' => $request->deskripsi,
                'image' => $imageName,
                'link' => $request->link,
                'status' => $request->status != "" ? "1" : "0"
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


        $product = Product::select('*')->where('id', $id)->first();

        if (Storage::exists($product['image'])) {
            // dd("path ditemukan");
            Storage::delete($product['image']);
        } else {
            // dd("path tidak ditemukan");
        }

        $delete = Product::where('id', $id)
            ->delete();

        if ($delete) {
            return redirect()->route('produkPage')->with('berhasil', 'Data berhasil di hapus');
        } else {
            return redirect()->route('produkPage')->with('gagal', 'Data gagal di hapus');
        }
    }
}
