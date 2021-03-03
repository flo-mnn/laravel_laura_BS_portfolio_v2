<?php

namespace App\Http\Controllers;

use App\Models\PageImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PageImageController extends Controller
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
        Storage::put('public/img', $request->file('src'));
        $pageImage = new PageImage();
        $pageImage->src = $request->file('src')->hashName();
        $pageImage->save();

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PageImage  $pageImage
     * @return \Illuminate\Http\Response
     */
    public function show(PageImage $pageImage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PageImage  $pageImage
     * @return \Illuminate\Http\Response
     */
    public function edit(PageImage $pageImage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PageImage  $pageImage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PageImage $pageImage)
    {
        Storage::delete('public/img'.$pageImage->src);
        Storage::put('public/img', $request->file('src'));
        $pageImage->src = $request->file('src')->hashName();
        
        $pageImage->save();

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PageImage  $pageImage
     * @return \Illuminate\Http\Response
     */
    public function destroy(PageImage $pageImage)
    {
        // $pageImage->delete();
        // return redirect()->back();
    }
}
