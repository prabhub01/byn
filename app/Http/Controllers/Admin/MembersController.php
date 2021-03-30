<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Imports\MembersImport;
use App\Models\Members;
use Maatwebsite\Excel\Facades\Excel;

class MembersController extends Controller
{
    public function index()
    {
        $data=Members::all();
        return view('backend.members',compact('data'));
    }

    public function viewDetails($id)
    {
        // dd($id);
        $data = Members::where('member_id', '=' ,$id)->first();
        return view('backend.member-details', compact('data'));
    }

    public function import()
    {
        Excel::import(new MembersImport,request()->file('file'));
        return back();
    }
}
