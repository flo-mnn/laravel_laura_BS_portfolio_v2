<?php

namespace App\Http\Controllers;

use App\Models\AboutDigitalSkill;
use Illuminate\Http\Request;

class AboutDigitalSkillController extends Controller
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
        $aboutDigitalSkill = new AboutDigitalSkill();
        $aboutDigitalSkill->skill = $request->skill;
        $aboutDigitalSkill->percentage = $request->percentage;
        $aboutDigitalSkill->save();

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AboutDigitalSkill  $aboutDigitalSkill
     * @return \Illuminate\Http\Response
     */
    public function show(AboutDigitalSkill $aboutDigitalSkill)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AboutDigitalSkill  $aboutDigitalSkill
     * @return \Illuminate\Http\Response
     */
    public function edit(AboutDigitalSkill $aboutDigitalSkill)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AboutDigitalSkill  $aboutDigitalSkill
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AboutDigitalSkill $aboutDigitalSkill)
    {
        $aboutDigitalSkill = new AboutDigitalSkill();
        $aboutDigitalSkill->skill = $request->skill;
        $aboutDigitalSkill->percentage = $request->percentage;
        $aboutDigitalSkill->save();

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AboutDigitalSkill  $aboutDigitalSkill
     * @return \Illuminate\Http\Response
     */
    public function destroy(AboutDigitalSkill $aboutDigitalSkill)
    {
       $aboutDigitalSkill->delete();
        return redirect()->back();
    }
}
