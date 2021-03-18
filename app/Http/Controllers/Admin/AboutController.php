<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function show()
    {
        $data=About::all();
        return view('backend.about',compact('data'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'intro_heading' => 'required',
            'ai_history' => 'required',
            'byn_history' => 'required',
        ]);

         // escape the token field while updating the record
         $data['intro_heading']=$request->intro_heading;
         $data['ai_history']=$request->ai_history;
         $data['byn_history']=$request->byn_history;

         About::whereId($id)->update($data);
        return redirect()->route('admin.about')
                        ->with('success','History of AI Nepal/Byn is Updated successfully.');
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
