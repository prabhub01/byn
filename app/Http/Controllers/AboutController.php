<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Team;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function show()
    {
        $info = About::all()->first();
        $team = Team::all();
        return view('frontend.about',compact('info','team'));
    }
}
