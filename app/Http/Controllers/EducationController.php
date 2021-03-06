<?php

namespace App\Http\Controllers;

use App\Models\Education;
use Illuminate\Http\Request;

class EducationController extends Controller
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
            'title' => 'required|max:100',
            'start_date' => 'required|numeric|between:1900,2100',
            'end_date' => 'numeric|between:1900,2100',
            'place' => 'required|max:100',
            'text' => 'max:500',
        ]);

        $education = new Education();
        $education->title = $request->title;
        $education->start_date = $request->start_date;
        $education->end_date = $request->end_date;
        $education->place = $request->place;
        $education->text = $request->text;
        $education->save();

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Education  $education
     * @return \Illuminate\Http\Response
     */
    public function show(Education $education)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Education  $education
     * @return \Illuminate\Http\Response
     */
    public function edit(Education $education)
    {
        return view('pages.bo.edit.education', ['education'=>$education]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Education  $education
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Education $education)
    {
        $validated = $request->validate([
            'title' => 'required|max:100',
            'start_date' => 'required|numeric|between:1900,2100',
            'place' => 'required|max:100',
            'text' => 'max:500',
        ]);

        $education->title = $request->title;
        $education->start_date = $request->start_date;
        $education->end_date = $request->end_date;
        $education->place = $request->place;
        $education->text = $request->text;
        $education->save();

        return redirect('/bo/resume');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Education  $education
     * @return \Illuminate\Http\Response
     */
    public function destroy(Education $education)
    {
        $education->delete();

        return redirect()->back();
    }
}
