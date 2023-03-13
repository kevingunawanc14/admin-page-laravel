<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function productPage()
    {
        $product = Product::select('*')->get();
        // $product = "a";

        return view('product/product', ['product' => $product]);
    }

    public function addProduk(Request $request)
    {

        $request->validate(
            [
                'username' => ['required', 'min:1', Rule::unique('user')->ignore($request->id_user, 'id_user')],
                'nama' => 'required|min:1',
                'email' => 'required|email:dns',
                'alamat' => 'required|min:1',
                'password' => 'required|min:1'
            ]
        );

        $User = Product::create([
            'username' => $request->username,
            'nama' => $request->nama,
            'email' => $request->email,
            'alamat' => $request->alamat,
            'password' => Hash::make($request->password),
            'status' => ($request->status != "" ? "1" : "0"),


        ]);

        // return redirect()->route('viewuserdata')->with('message', 'Data update succeesfully');

        if ($User) {
            return redirect()->route('productPage')->with('berhasil', 'Data berhasil di tambahkan');
        } else {
            return redirect()->route('productPage')->with('gagal', 'Data gagal di tambahkan');
        }
    }

    public function deleteAllUser()
    {

        $deleteUser = Product::truncate();

        if ($deleteUser) {
            return redirect()->route('productPage')->with('berhasil', 'Data berhasil di hapus semua');
        } else {
            return redirect()->route('productPage')->with('bahaya', 'Data gagal di hapus semua');
        }
    }

    public function updateUserPage($id)
    {
        // dd($id);

        // $user_data = UserdataModel::select('*')
        //     ->where('id', $id)
        //     ->first();

        $dataUpdate = Product::select('*')->where('id_user', $id)->first();

        return view('user/update', ['data' => $dataUpdate]);
    }

    public function updateUser(Request $request)
    {

        // DB::table('user')
        //       ->where('id_user', $request->id)
        //       ->update(['nama'   => generateRandomString(),
        //                 'alamat' => generateRandomString()]);
        $request->validate(
            [
                'username' => ['required', 'min:1', Rule::unique('user')->ignore($request->id_user, 'id_user')],
                'nama' => 'required|min:1',
                'email' => 'required|email:dns',
                'alamat' => 'required|min:1'
            ]
        );

        $User = Product::where('id_user', $request->id_user)->update(
            [
                'username' => $request->username,
                'nama' => $request->nama,
                'email' => $request->email,
                'alamat' => $request->alamat,
                'password' => ($request->passwordBaru != "" ? Hash::make($request->passwordBaru) : $request->passwordLama),
                'status' => $request->status != "" ? "1" : "0"
            ]
        );

        if ($User) {
            return redirect()->route('productPage')->with('berhasil', 'Data berhasil di update');
        } else {
            return redirect()->route('productPage')->with('gagal', 'Data gagal di update');
        }
    }

    public function deleteUser($id_user)
    {
        $delete = Product::where('id_user', $id_user)
            ->delete();

        if ($delete) {
            return redirect()->route('productPage')->with('berhasil', 'Data berhasil di hapus');
        } else {
            return redirect()->route('productPage')->with('gagal', 'Data gagal di hapus');
        }
    }
}
