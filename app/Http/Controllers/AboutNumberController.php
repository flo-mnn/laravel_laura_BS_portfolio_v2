<?php

namespace App\Http\Controllers;

use App\Models\AboutNumber;
use Illuminate\Http\Request;

class AboutNumberController extends Controller
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
        $aboutNumber = new AboutNumber();
        $aboutNumber->icon = $request->icon;
        $aboutNumber->icon_color = $request->icon_color;
        $aboutNumber->number = $request->number;
        $aboutNumber->emphasis = $request->emphasis;
        $aboutNumber->text = $request->text;
        $aboutNumber->save();

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AboutNumber  $aboutNumber
     * @return \Illuminate\Http\Response
     */
    public function show(AboutNumber $aboutNumber)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AboutNumber  $aboutNumber
     * @return \Illuminate\Http\Response
     */
    public function edit(AboutNumber $aboutNumber)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AboutNumber  $aboutNumber
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AboutNumber $aboutNumber)
    {
        $aboutNumber->icon = $request->icon;
        $aboutNumber->icon_color = $request->icon_color;
        $aboutNumber->number = $request->number;
        $aboutNumber->emphasis = $request->emphasis;
        $aboutNumber->text = $request->text;
        $aboutNumber->save();

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AboutNumber  $aboutNumber
     * @return \Illuminate\Http\Response
     */
    public function destroy(AboutNumber $aboutNumber)
    {
        $aboutNumber->delete();

        return redirect()->back();
    }
}
