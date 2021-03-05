<?php

namespace App\Http\Controllers;

use App\Models\PortfolioFilter;
use App\Models\PortfolioItem;
use Illuminate\Http\Request;

class PortfolioFilterController extends Controller
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
            'filter' => 'max:20',
        ]);

        $portfolioFilter = new PortfolioFilter();
        $portfolioFilter->filter = $request->filter;
    
        $portfolioFilter->save();

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PortfolioFilter  $portfolioFilter
     * @return \Illuminate\Http\Response
     */
    public function show(PortfolioFilter $portfolioFilter)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PortfolioFilter  $portfolioFilter
     * @return \Illuminate\Http\Response
     */
    public function edit(PortfolioFilter $portfolioFilter)
    {
        return view('pages.bo.edit.portfolioFilter', ['portfolio_filter'=>$portfolioFilter]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PortfolioFilter  $portfolioFilter
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PortfolioFilter $portfolioFilter)
    {
        
        $validated = $request->validate([
            'filter' => 'max:20',
            ]);
        
        $oldFilter = $portfolioFilter->filter;
        $portfolioItems = PortfolioItem::all();
        foreach ($portfolioItems as $portfolioItem) {
            if ($portfolioItem->filter == $oldFilter) {
                $portfolioItem->filter = $request->filter;
                $portfolioItem->save();
            }
        }
        $portfolioFilter->filter = $request->filter;
    
        $portfolioFilter->save();

        return redirect('/bo/portfolio');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PortfolioFilter  $portfolioFilter
     * @return \Illuminate\Http\Response
     */
    public function destroy(PortfolioFilter $portfolioFilter)
    {
        $portfolioFilter->delete();
        return redirect()->back();
    }
}
