<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Minute;
use Illuminate\Http\Request;

class MinuteController extends Controller
{
    public function index()
    {
        return view('backend.add-minute');
    }

    public function show()
    {
        $data = Minute::all();
        return view('backend.view-minute', compact('data'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'keyword' => 'required',
            'date' => 'required',
            'location' => 'required',
            'participants' => 'required',
            'meeting_type' => 'required',
            'image1' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'image2' => 'image|mimes:jpeg,png,jpg|max:2048',
            // 'ek_rupaiya' => 'num',
        ]);

         if ($request->file('image1')) {
             $imagePath1 = $request->file('image1');
             $imageName1 = $imagePath1->getClientOriginalName();
             $path = $request->image1->move(public_path('uploads/minute/'), $imageName1);
           }

        //  if ($request->file('image2')) {
        //     $imagePath2 = $request->file('image2');
        //     $imageName2 = $imagePath2->getClientOriginalName();
        //     $path = $request->image2->move(public_path('uploads/minute/'), $imageName2);
        //   }

           $meeting = new Minute;

           $meeting->keywords = $request->keyword;
           $meeting->date = $request->date;
           $meeting->location = $request->location;
           $meeting->participants = $request->participants;
           $meeting->meeting_type = $request->meeting_type;
           $meeting->ek_rupaiya = $request->ek_rupaiya;

           $meeting->photo1 = $imageName1;
           $meeting->save();

        return redirect()->route('admin.view-minute')
        ->with('success','Minute Added Successfully.');
    }
}
