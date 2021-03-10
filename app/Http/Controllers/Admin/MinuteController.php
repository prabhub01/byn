<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MinuteController extends Controller
{
    public function index()
    {
        return view('backend.add-minute');
    }

    public function show()
    {
        return view('backend.view-minute');
    }

    public function store()
    {

    }
}
