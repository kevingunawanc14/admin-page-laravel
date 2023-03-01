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

            return redirect()->route('usersPage')->with('loginBerhasil', 'Selamat datang ' .$namaUser);
        } else {
            return redirect()->route('loginPage')->with('loginGagal', 'Username / password salah');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route("loginPage");
    }

    public function usersPage()
    {
        $user = User::select('*')->get();

        // dd(session()->all());

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
            return redirect()->route('usersPage')->with('berhasilAdd', 'Data berhasil di tambahkan');
        } else {
            return redirect()->route('usersPage')->with('gagalAdd', 'Data gagal di tambahkan');
        }
    }

    public function deleteAllUser()
    {

        $deleteUser = User::truncate();

        if ($deleteUser) {
            return redirect()->route('usersPage')->with('berhasilDeleteSemuaData', 'Data berhasil di hapus semua');
        } else {
            return redirect()->route('usersPage')->with('gagalDeleteSemuaData', 'Data gagal di hapus semua');
        }

    }

    // public function viewAllUser()
    // {
    //     $user = User::select('*')->get();

    //     // dd(session()->all());

    //     return view('user/user', ['user' => $user]);
    // }

    public function hapusUser($id_user)
    {
        $user = User::where('id_user', $id_user)
            ->delete();

        return redirect()->route('viewAllUser');
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
            return redirect()->route('viewAllUser')->with('berhasilUpdate', 'Data berhasil di update');
        } else {
            return redirect()->route('viewAllUser')->with('gagalUpdate', 'Data gagal di update');
        }
    }

    public function openUpdatePage($id)
    {
        // dd($id);

        // $user_data = UserdataModel::select('*')
        //     ->where('id', $id)
        //     ->first();

        $dataUpdate = User::select('*')->where('id_user', $id)->first();

        return view('user/update', ['data' => $dataUpdate]);
    }


}

function generateRandomString($length = 10)
{
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[random_int(0, $charactersLength - 1)];
    }
    return $randomString;
}
