<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ExternalLink;
use Illuminate\Http\Request;

class ExternalLinkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=ExternalLink::all();
        return view('backend.external_links',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'ai' => 'required',
            'ai_nepal' => 'required',
            'ai_nepal_activities' => 'required',
            'int_campaign' => 'required',
            'campaign_materails' => 'required',
            'appeal_for_action' => 'required',
            'national_board' => 'required',
            'publications' => 'required',
        ]);

         $data['ai']=$request->ai;
         $data['ai_nepal']=$request->ai_nepal;
         $data['ai_nepal_activities']=$request->ai_nepal_activities;
         $data['int_campaign']=$request->int_campaign;
         $data['campaign_materails']=$request->campaign_materails;
         $data['appeal_for_action']=$request->appeal_for_action;
         $data['national_board']=$request->national_board;
         $data['publications']=$request->publications;


         ExternalLink::whereId($id)->update($data);
        return redirect()->route('admin.external_links')
                        ->with('success','External Links Updated Successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
