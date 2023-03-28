<?php

namespace App\Http\Controllers;

use App\Models\Catalog;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Storage;

class CatalogController extends Controller
{
    public function catalogPage()
    {
        $catalog = Catalog::select('*')->get();

        return view('catalog/catalog', ['catalog' => $catalog]);
    }

    public function addCatalogPage()
    {
        return view('catalog/add');
    }

    public function addCatalog(Request $request)
    {
        // dd($request);

        $request->validate(
            [
                'nama' => ['required', 'min:1', Rule::unique('catalog')->ignore($request->id, 'id')],
                'judul' => 'required|min:1',
                'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
                'pdf' =>  'required|mimes:pdf|max:2048'
            ]
        );


        $imageName = $request->file('image')->store('images');
        $pdfName = $request->file('pdf')->store('pdf');


        $catalog = Catalog::create([
            'nama' => $request->nama,
            'judul' => $request->judul,
            'image' => $imageName,
            'pdf' => $pdfName,
            'status' => $request->status != "" ? "1" : "0"
        ]);


        if ($catalog) {
            return redirect()->route('catalogPage')->with('berhasil', 'Data berhasil di tambahkan');
        } else {
            return redirect()->route('catalogPage')->with('gagal', 'Data gagal di tambahkan');
        }
    }

    public function updateCatalogPage($id)
    {

        $dataUpdate = Catalog::select('*')->where('id', $id)->first();

        return view('catalog/update', ['data' => $dataUpdate]);
    }

    public function updateCatalog(Request $request)
    {

        $catalog = Catalog::select('*')->where('id', $request->id)->first();


        // Storage::exists(public_path('storage/'.$product['image']))
        if (Storage::exists($catalog['image'])) {
            // dd("path ditemukan");
            Storage::delete($catalog['image']);
        } else {
            // dd("path tidak ditemukan");
        }

        $request->validate(
            [
                'nama' => ['required', 'min:1', Rule::unique('catalog')->ignore($request->id, 'id')],
                'judul' => 'required|min:1',
                'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
                'pdf' =>  'required|mimes:pdf|max:2048'
            ]
        );

        $imageName = $request->file('image')->store('images');
        $pdfName = $request->file('pdf')->store('pdf');

        $catalog = Catalog::where('id', $request->id)->update(
            [
                'nama' => $request->nama,
                'judul' => $request->judul,
                'image' => $imageName,
                'pdf' => $pdfName,
                'status' => $request->status != "" ? "1" : "0"
            ]
        );


        if ($catalog) {
            return redirect()->route('catalogPage')->with('berhasil', 'Data berhasil di update');
        } else {
            return redirect()->route('catalogPage')->with('gagal', 'Data gagal di update');
        }
    }

    public function deleteCatalog($id)
    {

        $catalog = Catalog::select('*')->where('id', $id)->first();

        if (Storage::exists($catalog['image'])) {
            // dd("path ditemukan");
            Storage::delete($catalog['image']);
        } else {
            // dd("path tidak ditemukan");
        }

        $delete = Catalog::where('id', $id)
            ->delete();

        if ($delete) {
            return redirect()->route('catalogPage')->with('berhasil', 'Data berhasil di hapus');
        } else {
            return redirect()->route('catalogPage')->with('gagal', 'Data gagal di hapus');
        }
    }
}
