<?php

namespace App\Http\Controllers;

use App\Models\PortfolioFilter;
use App\Models\PortfolioItem;
use Illuminate\Http\Request;

class PortfolioItemController extends Controller
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
            'cover_src' => 'required|image',
            'filter' => 'required',
            'url' => 'max:500',
        ]);

        $portfolioItem = new PortfolioItem();
        $portfolioItem->title = $request->title;
        $portfolioItem->cover_src = $request->cover_src;
        $portfolioItem->filter = $request->filter;
        $portfolioItem->url = $request->url;
        
        
        $portfolioItem->save();

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PortfolioItem  $portfolioItem
     * @return \Illuminate\Http\Response
     */
    public function show(PortfolioItem $portfolioItem)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PortfolioItem  $portfolioItem
     * @return \Illuminate\Http\Response
     */
    public function edit(PortfolioItem $portfolioItem)
    {
        return view('pages.bo.edit.portfolioItem', ['portfolio_item'=>$portfolioItem, 'portfolio_filters'=>PortfolioFilter::all()]);
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PortfolioItem  $portfolioItem
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PortfolioItem $portfolioItem)
    {
        $validated = $request->validate([
            'title' => 'required|max:100',
            'cover_src' => 'required|image',
            'filter' => 'required',
            'url' => 'max:500',
        ]);

        $portfolioItem->title = $request->title;
        $portfolioItem->cover_src = $request->cover_src;
        $portfolioItem->filter = $request->filter;
        $portfolioItem->url = $request->url;
        
        
        $portfolioItem->save();

        return redirect('/bo/portfolio');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PortfolioItem  $portfolioItem
     * @return \Illuminate\Http\Response
     */
    public function destroy(PortfolioItem $portfolioItem)
    {
        $portfolioItem->delete();
        return redirect()->back();
    }
}
