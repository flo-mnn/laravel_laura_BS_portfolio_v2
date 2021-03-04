<?php

namespace App\Http\Controllers;

use App\Models\ResumeSummary;
use Illuminate\Http\Request;

class ResumeSummaryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Models\ResumeSummary  $resumeSummary
     * @return \Illuminate\Http\Response
     */
    public function show(ResumeSummary $resumeSummary)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ResumeSummary  $resumeSummary
     * @return \Illuminate\Http\Response
     */
    public function edit(ResumeSummary $resumeSummary)
    {
        return view('pages.bo.edit.resumeSummary', ['resume_summary'=>$resumeSummary]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ResumeSummary  $resumeSummary
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ResumeSummary $resumeSummary)
    {
        $resumeSummary->name = $request->name;
        $resumeSummary->text = $request->text;
        $resumeSummary->address = $request->address;
        $resumeSummary->phone = $request->phone;
        $resumeSummary->email = $request->email;
          
        $resumeSummary->save();

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ResumeSummary  $resumeSummary
     * @return \Illuminate\Http\Response
     */
    public function destroy(ResumeSummary $resumeSummary)
    {
        //
    }
}
