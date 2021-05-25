<?php

namespace App\Http\Controllers;

use App\Models\District;
use App\Models\Provience;
use Illuminate\Http\Request;

class JoinUsController extends Controller
{
    public function show()
    {
        $district = District::all();
        $provience = Provience::all();
        return view('frontend.joinus', compact('provience','district'));
    }
}
