<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Inbox;

class InboxController extends Controller
{
    public function index()
    {
        $data=Inbox::all();
        return view('backend.inbox',compact('data'));
    }
}
