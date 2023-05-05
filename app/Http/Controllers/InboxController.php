<?php

namespace App\Http\Controllers;

use App\Models\Inbox;
use Illuminate\Http\Request;

class InboxController extends Controller
{
    public function inboxPage()
    {
        $inbox = Inbox::orderBy('id', 'desc')->get();
        // $product = "a";

        return view('inbox/inbox', ['inbox' => $inbox]);
    }
}
