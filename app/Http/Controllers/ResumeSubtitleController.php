<?php

namespace App\Http\Controllers;

use App\Models\ResumeSubtitle;
use Illuminate\Http\Request;

class ResumeSubtitleController extends Controller
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
     * @param  \App\Models\ResumeSubtitle  $resumeSubtitle
     * @return \Illuminate\Http\Response
     */
    public function show(ResumeSubtitle $resumeSubtitle)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ResumeSubtitle  $resumeSubtitle
     * @return \Illuminate\Http\Response
     */
    public function edit(ResumeSubtitle $resumeSubtitle)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ResumeSubtitle  $resumeSubtitle
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ResumeSubtitle $resumeSubtitle)
    {
        $resumeSubtitle->title = $request->title;
          
        $resumeSubtitle->save();

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ResumeSubtitle  $resumeSubtitle
     * @return \Illuminate\Http\Response
     */
    public function destroy(ResumeSubtitle $resumeSubtitle)
    {
        //
    }
}
