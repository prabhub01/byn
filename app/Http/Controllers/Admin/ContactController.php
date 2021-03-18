<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $data=Contact::all();
        return view('backend.contact',compact('data'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'full_address' => 'required',
            'phone' => 'required',
            'email' => 'required',
        ]);

         // escape the token field while updating the record
         $data['full_address']=$request->full_address;
         $data['phone']=$request->phone;
         $data['email']=$request->email;

         Contact::whereId($id)->update($data);
        return redirect()->route('admin.contact')
                        ->with('success','Contact Updated Successfully.');
    }
}
