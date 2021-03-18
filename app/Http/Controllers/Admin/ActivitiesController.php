<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Activities;
use Illuminate\Http\Request;

class ActivitiesController extends Controller
{
    public function index()
    {
        $data=Activities::all();
        return view('backend.activities', compact('data'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'date' => 'required',
            'venue' => 'required',
            'participants' => 'required',
            'program_type' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'details' => 'required',
        ]);

         if ($request->file('image')) {
             $imagePath = $request->file('image');
             $imageName = $imagePath->getClientOriginalName();

             // $path = $request->file('image')->storeAs('uploads', $imageName, 'public');
             $path = $request->image->move(public_path('uploads'), $imageName);
           }

           $activity = new Activities();

           $activity->title = $request->title;
           $activity->date = $request->date;
           $activity->venue = $request->venue;
           $activity->participants = $request->participants;
           $activity->program_type = $request->program_type;
           $activity->details = $request->details;

           $activity->image = $imageName;
           $activity->path = $path;
           $activity->save();

        return redirect()->route('admin.activities')
        ->with('success','Activity Saved Successfully.');
    }
}
