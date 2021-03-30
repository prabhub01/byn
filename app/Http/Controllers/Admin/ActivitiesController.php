<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Activities;
use Illuminate\Http\Request;
use Illuminate\Support\Testing\Fakes\BusFake;

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
             $path = $request->image->move(public_path('uploads/activities'), $imageName);
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

    public function edit($id)
    {
        $details = Activities::findOrFail($id);
        return view('backend.edit-activities', compact('details'));
    }

    public function update(Request $request, $id)
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
             $path = $request->image->move(public_path('uploads/activities'), $imageName);
           }

        // escape the token field while updating the record
        $data['title']=$request->title;
        $data['date']=$request->date;
        $data['venue']=$request->venue;
        $data['participants']=$request->participants;
        $data['program_type']=$request->program_type;
        $data['details']=$request->details;

        Activities::whereId($id)->update($data);
        return redirect()->route('admin.activities')
        ->with('success','Activity Updated Successfully.');
    }
}
