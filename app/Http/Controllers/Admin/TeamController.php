<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function index()
    {
        $member=Team::all();
        // dd($member);
        return view('backend.team', compact('member'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'post' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

         if ($request->file('image')) {
             $imagePath = $request->file('image');
             $imageName = $imagePath->getClientOriginalName();

             // $path = $request->file('image')->storeAs('uploads', $imageName, 'public');
             $path = $request->image->move(public_path('uploads/team'), $imageName);
           }

           $team = new Team;

           $team->full_name = $request->name;
           $team->post = $request->post;
           $team->mobile = $request->mobile;
           $team->fb_link = $request->fb;
           $team->insta_link = $request->insta;
           $team->image = $imageName;
           $team->save();

        return redirect()->route('admin.team')
        ->with('success','New Board Memebr Added Successfully.');

    }
}
