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

        $validated = $request->validate([
            'skill' => 'required|max:100',
            'percentage' => 'required|numeric|between:0,100',
        ]);

        $aboutDigitalSkill = new AboutDigitalSkill();
        $aboutDigitalSkill->skill = $request->skill;
        $aboutDigitalSkill->percentage = $request->percentage;
        $aboutDigitalSkill->order = count(AboutDigitalSkill::all()) +1;
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
        return view('pages.bo.edit.aboutDigitalSkill', ['about_digital_skill'=>$aboutDigitalSkill]);
        
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
        $validated = $request->validate([
            'skill' => 'required|max:100',
            'percentage' => 'required|numeric|between:0,100',
        ]);

        $aboutDigitalSkill->skill = $request->skill;
        $aboutDigitalSkill->percentage = $request->percentage;
        $aboutDigitalSkill->save();

        return redirect('/bo/about');
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

    public function order(Request $request)
    {
        if ($request->order) {
            $ids = explode("/", $request->order);
            for ($i=0; $i < count($ids) ; $i++) { 
                $toOrder = $ids[$i];
                $itemDB = AboutDigitalSkill::find($toOrder);
                $itemDB->order = $i;
                $itemDB->save();
            }
        }

        // use a new order column & helper sortby (already added in web.php)
        return redirect()->back();
    }
}
