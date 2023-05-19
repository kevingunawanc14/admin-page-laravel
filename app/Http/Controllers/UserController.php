<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{

    public function loginPage()
    {
        return view('user/login');
    }

    public function authenticate(Request $request)
    {
        $data = [
            'username' => $request->username,
            'password' => $request->password
        ];

        // dd($data);
        // dd(Hash::make($request->password));

        if (Auth::Attempt($data)) {
            $request->session()->regenerate();

            $dataSession = session()->all();

            $idUser = $dataSession["login_web_59ba36addc2b2f9401580f014c7f58ea4e30989d"];

            // $User = User::where('id_user', $idUser)->get();
            // dd($User->first()->nama);
            // $namaUser = $User->first()->nama;

            $namaUser = Auth::User()->nama;

            return redirect()->route('statisticPage')->with('berhasil', 'Selamat datang ' . $namaUser);
        } else {
            return redirect()->route('loginPage')->with('gagal', 'Username / password salah');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route("loginPage");
    }

    public function usersPage()
    {
        $user = User::orderBy('id_user', 'desc')->get();

        // dd(session()->all());
        // 

        return view('user/user', ['user' => $user]);
    }

    public function addUserPage()
    {
        return view('user/add');
    }

    public function addUser(Request $request)
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

        $User = User::create([
            'username' => $request->username,
            'nama' => $request->nama,
            'email' => $request->email,
            'alamat' => $request->alamat,
            'password' => Hash::make($request->password),
            'status' => ($request->status != "" ? "1" : "0"),


        ]);

        // return redirect()->route('viewuserdata')->with('message', 'Data update succeesfully');

        if ($User) {
            return redirect()->route('usersPage')->with('berhasil', 'Data berhasil di tambahkan');
        } else {
            return redirect()->route('usersPage')->with('gagal', 'Data gagal di tambahkan');
        }
    }

    public function deleteAllUser()
    {

        $deleteUser = User::truncate();

        if ($deleteUser) {
            return redirect()->route('usersPage')->with('berhasil', 'Data berhasil di hapus semua');
        } else {
            return redirect()->route('usersPage')->with('bahaya', 'Data gagal di hapus semua');
        }
    }

    public function updateUserPage($id)
    {
        // dd($id);

        // $user_data = UserdataModel::select('*')
        //     ->where('id', $id)
        //     ->first();

        $dataUpdate = User::select('*')->where('id_user', $id)->first();

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

        $User = User::where('id_user', $request->id_user)->update(
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
            return redirect()->route('usersPage')->with('berhasil', 'Data berhasil di update');
        } else {
            return redirect()->route('usersPage')->with('gagal', 'Data gagal di update');
        }
    }

    public function deleteUser($id_user)
    {
        $delete = User::where('id_user', $id_user)
            ->delete();

        if ($delete) {
            return redirect()->route('usersPage')->with('berhasil', 'Data berhasil di hapus');
        } else {
            return redirect()->route('usersPage')->with('gagal', 'Data gagal di hapus');
        }
    }

    public function profileUserPage()
    {
        return view('user/profile');
    }




}
