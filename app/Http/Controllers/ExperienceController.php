<?php

namespace App\Http\Controllers;

use App\Models\Experience;
use Illuminate\Http\Request;

class ExperienceController extends Controller
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
            'task1' => 'max:500',
            'task2' => 'max:500',
            'task3' => 'max:500',
            'task4' => 'max:500',
        ]);

        $experience = new Experience();
        $experience->title = $request->title;
        $experience->start_date = $request->start_date;
        $experience->end_date = $request->end_date;
        $experience->place = $request->place;
        $experience->task1 = $request->task1;
        $experience->task2 = $request->task2;
        $experience->task3 = $request->task3;
        $experience->task4 = $request->task4;
        $experience->save();

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Experience  $experience
     * @return \Illuminate\Http\Response
     */
    public function show(Experience $experience)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Experience  $experience
     * @return \Illuminate\Http\Response
     */
    public function edit(Experience $experience)
    {
        return view('pages.bo.edit.experience', ['experience'=>$experience]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Experience  $experience
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Experience $experience)
    {
        $validated = $request->validate([
            'title' => 'required|max:100',
            'start_date' => 'required|numeric|between:1900,2100',
            'place' => 'required|max:100',
            'task1' => 'max:500',
            'task2' => 'max:500',
            'task3' => 'max:500',
            'task4' => 'max:500',
        ]);

        $experience->title = $request->title;
        $experience->start_date = $request->start_date;
        $experience->end_date = $request->end_date;
        $experience->place = $request->place;
        $experience->task1 = $request->task1;
        $experience->task2 = $request->task2;
        $experience->task3 = $request->task3;
        $experience->task4 = $request->task4;
        $experience->save();

        return redirect('/bo/resume');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Experience  $experience
     * @return \Illuminate\Http\Response
     */
    public function destroy(Experience $experience)
    {
        $experience->delete();

        return redirect()->back();
    }
}
