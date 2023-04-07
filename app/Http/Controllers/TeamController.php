<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function teamPage()
    {
        $team = Team::select('*')->get();

        return view('team/team', ['product' => $team]);
    }

    public function addTeamPage()
    {
        return view('team/add');
    }

    public function addTeam(Request $request)
    {

        $request->validate(
            [
                'nama' => ['required', 'min:1', Rule::unique('product')->ignore($request->id, 'id')],
                'deskripsi' => 'required|min:1',
                'jabatan' => 'required|min:1',
                'linkedin' => 'required|min:1',
                'facebook' => 'required|min:1',
                'instagram' => 'required|min:1',
            ]
        );


        $team = Team::create([

            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi,
            'jabatan' => $request->jabatan,
            'linkedin' => $request->linkedin,
            'facebook' => $request->facebook,
            'instagram' => $request->instagram,
            'status' => $request->status != "" ? "1" : "0"

        ]);


        if ($team) {
            return redirect()->route('teamPage')->with('berhasil', 'Data berhasil di tambahkan');
        } else {
            return redirect()->route('teamPage')->with('gagal', 'Data gagal di tambahkan');
        }
    }

    public function updateTeamPage($id)
    {

        $dataUpdate = Team::select('*')->where('id', $id)->first();

        return view('team/update', ['data' => $dataUpdate]);
    }

    public function updateTeam(Request $request)
    {

        $team = Team::where('id', $request->id)->update(
            [
                'nama' => $request->nama,
                'deskripsi' => $request->deskripsi,
                'jabatan' => $request->jabatan,
                'linkedin' => $request->linkedin,
                'facebook' => $request->facebook,
                'instagram' => $request->instagram,
                'status' => $request->status != "" ? "1" : "0"
            ]
        );


        if ($team) {
            return redirect()->route('teamPage')->with('berhasil', 'Data berhasil di update');
        } else {
            return redirect()->route('teamPage')->with('gagal', 'Data gagal di update');
        }
        
    }

    public function deleteTeam($id)
    {

        $delete = Team::where('id', $id)
            ->delete();

        if ($delete) {
            return redirect()->route('teamPage')->with('berhasil', 'Data berhasil di hapus');
        } else {
            return redirect()->route('teamPage')->with('gagal', 'Data gagal di hapus');
        }

    }
}
