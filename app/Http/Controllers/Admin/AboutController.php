<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function show()
    {
        return view('backend.about');
    }

    public function store()
    {

    }

    public function team()
    {
        return view('backend.team');
    }

    public function advisorClub()
    {
        return view('backend.advisor-club');
    }
}
