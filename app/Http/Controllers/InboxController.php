<?php

namespace App\Http\Controllers;

use App\Models\Inbox;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class InboxController extends Controller
{
    public function inboxPage()
    {
        $inbox = Inbox::orderBy('id', 'desc')->get();

        return view('inbox/inbox', ['inbox' => $inbox]);
    }

    public function addInboxPage()
    {


        return view('inbox/add');
    }

    public function addInbox(Request $request)
    {

        $request->validate(
            [
                'nama' => 'required|min:1',
                'email' => 'required|min:1',
                // 'email' => 'required|email:dns',
                'pesan' => 'required|min:1',
            ]
        );
        $Inbox = Inbox::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'pesan' => $request->pesan,
            'status' => ($request->status != "" ? "1" : "0"),


        ]);


        if ($Inbox) {
            return redirect()->route('inboxPage')->with('berhasil', 'Data berhasil di tambahkan');
        } else {
            return redirect()->route('inboxPage')->with('gagal', 'Data gagal di tambahkan');
        }
    }

    public function updateInboxPage($id)
    {


        $dataUpdate = Inbox::select('*')->where('id', $id)->first();



        return view('inbox/update', ['data' => $dataUpdate]);
    }

    public function updateInbox(Request $request)
    {

        $request->validate(
            [
                'nama' => 'required|min:1',
                'email' => 'required|min:1',
                // 'email' => 'required|email:dns',
                'pesan' => 'required|min:1'
            ]
        );


        $Inbox = Inbox::where('id', $request->id)->update(
            [
                'nama' => $request->nama,
                'email' => $request->email,
                'pesan' => $request->pesan,
                'status' => ($request->status != "" ? "1" : "0")
            ]
        );

        if ($Inbox) {
            return redirect()->route('inboxPage')->with('berhasil', 'Data berhasil di update');
        } else {
            return redirect()->route('inboxPage')->with('gagal', 'Data gagal di update');
        }
    }

    public function deleteInbox($id)
    {
        $delete = Inbox::where('id', $id)
            ->delete();

        if ($delete) {
            return redirect()->route('inboxPage')->with('berhasil', 'Data berhasil di hapus');
        } else {
            return redirect()->route('inboxPage')->with('gagal', 'Data gagal di hapus');
        }
    }

    public function updateInboxStatus($id)
    {

        $inbox = Inbox::find($id);

        // Check if the inbox status is already active
        // if ($inbox->status == '1') {
        //     return redirect()->back()->with('error', 'Inbox status is already active!');
        // }

        // Update the inbox status to active
        $inbox->status = '1';
        $inbox->save();

        return response()->json(['status' => 'success']);

        // return redirect()->back()->with('success', 'Inbox status has been updated to active.');
    }

    public function countUnreadInbox()
    {
        $count = Inbox::where('status', '<>', 1)->count();
        return response()->json(['unreadMessageCount' => $count]);
    }
}
