<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Storage;


class TeamController extends Controller
{
    public function teamPage()
    {
        $team = Team::select('*')->get();

        return view('team/team', ['team' => $team]);
    }

    public function addTeamPage()
    {
        return view('team/add');
    }

    public function addTeam(Request $request)
    {

        $request->validate(
            [
                'nama' => ['required', 'min:1', Rule::unique('team')->ignore($request->id, 'id')],
                'deskripsi' => 'required|min:1',
                'jabatan' => 'required|min:1',
                'linkedin' => 'required|min:1',
                'facebook' => 'required|min:1',
                'instagram' => 'required|min:1',
                'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            ]
        );

        $imageName = $request->file('image')->store('folderImageTeam');


        $team = Team::create([

            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi,
            'jabatan' => $request->jabatan,
            'linkedin' => $request->linkedin,
            'facebook' => $request->facebook,
            'instagram' => $request->instagram,
            'image' => $imageName,
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

        $team = Team::select('*')->where('id', $request->id)->first();

        if ($request->image != "") {
            if (Storage::exists($team['image'])) {
                Storage::delete($team['image']);
            } else {
            }

            $request->validate(
                [
                    'nama' => ['required', 'min:1', Rule::unique('team')->ignore($request->id, 'id')],
                    'deskripsi' => 'required|min:1',
                    'jabatan' => 'required|min:1',
                    'linkedin' => 'required|min:1',
                    'facebook' => 'required|min:1',
                    'instagram' => 'required|min:1',
                    'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',

                ]
            );

            $imageName = $request->file('image')->store('folderImageTeam');

        } else {

            $imageName = $request->imageLama;


            $request->validate(
                [
                    'nama' => ['required', 'min:1', Rule::unique('team')->ignore($request->id, 'id')],
                    'deskripsi' => 'required|min:1',
                    'jabatan' => 'required|min:1',
                    'linkedin' => 'required|min:1',
                    'facebook' => 'required|min:1',
                    'instagram' => 'required|min:1',
                    'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',

                ]
            );
        }


        $team = Team::where('id', $request->id)->update(
            [
                'nama' => $request->nama,
                'deskripsi' => $request->deskripsi,
                'jabatan' => $request->jabatan,
                'linkedin' => $request->linkedin,
                'facebook' => $request->facebook,
                'instagram' => $request->instagram,
                'image' => $imageName,
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
        $team = Team::select('*')->where('id', $id)->first();

        if (Storage::exists($team['image'])) {
            Storage::delete($team['image']);
        } else {
        }

        $delete = Team::where('id', $id)
            ->delete();

        if ($delete) {
            return redirect()->route('teamPage')->with('berhasil', 'Data berhasil di hapus');
        } else {
            return redirect()->route('teamPage')->with('gagal', 'Data gagal di hapus');
        }

    }
}
