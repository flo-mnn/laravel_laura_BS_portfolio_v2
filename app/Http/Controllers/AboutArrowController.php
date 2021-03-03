<?php

namespace App\Http\Controllers;

use App\Models\AboutArrow;
use Illuminate\Http\Request;

class AboutArrowController extends Controller
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
        $arrow = new AboutArrow;
        $arrow->title = $request->title;
        $arrow->info = $request->info;
        $arrow->save();

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AboutArrow  $aboutArrow
     * @return \Illuminate\Http\Response
     */
    public function show(AboutArrow $aboutArrow)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AboutArrow  $aboutArrow
     * @return \Illuminate\Http\Response
     */
    public function edit(AboutArrow $aboutArrow)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AboutArrow  $aboutArrow
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AboutArrow $aboutArrow)
    {
        
        $aboutArrow->title = $request->title;
        $aboutArrow->info = $request->info;
        $aboutArrow->save();

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AboutArrow  $aboutArrow
     * @return \Illuminate\Http\Response
     */
    public function destroy(AboutArrow $aboutArrow)
    {
        $aboutArrow->delete();

        return redirect()->back();
    }
}
