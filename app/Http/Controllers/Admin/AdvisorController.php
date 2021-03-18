<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AdvisorClub;
use Illuminate\Http\Request;

class AdvisorController extends Controller
{
    public function index()
    {
        $member=AdvisorClub::all();
        return view('backend.advisor-club', compact('member'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

         if ($request->file('image')) {
             $imagePath = $request->file('image');
             $imageName = $imagePath->getClientOriginalName();

             // $path = $request->file('image')->storeAs('uploads', $imageName, 'public');
             $path = $request->image->move(public_path('uploads/advisor'), $imageName);
           }

           $adv = new AdvisorClub;

           $adv->full_name = $request->name;
           $adv->mobile = $request->mobile;
           $adv->fb_link = $request->fb;
           $adv->insta_link = $request->insta;
           $adv->image = $imageName;
           $adv->save();

        return redirect()->route('admin.advisor-club')
        ->with('success','New Advisor Added Successfully.');

    }
}
