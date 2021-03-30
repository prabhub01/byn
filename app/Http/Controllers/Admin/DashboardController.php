<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Inbox;
use App\Models\Members;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $messageCount = Inbox::all()->count();
        $validYouth = Members::where('valid_upto', '>' ,'2021-01-01')->count();
        return view('backend.dashboard', compact('messageCount','validYouth'));
    }
}
