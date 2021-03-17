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
        $validated = $request->validate([
            'icon' => 'required|max:100',
            'icon_color' => 'required|max:100',
            'number' => 'required|numeric',
            'emphasis' => 'required|max:40',
            'text' => 'max:500',
        ]);

        $aboutNumber = new AboutNumber();
        $aboutNumber->icon = $request->icon;
        $aboutNumber->icon_color = $request->icon_color;
        $aboutNumber->number = $request->number;
        $aboutNumber->emphasis = $request->emphasis;
        $aboutNumber->text = $request->text;
        $aboutNumber->order = count(AboutNumber::all()) +1;
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
        return view('pages.bo.edit.aboutNumber', ['about_number'=>$aboutNumber]);
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
        $validated = $request->validate([
            'icon' => 'required|max:100',
            'icon_color' => 'required|max:100',
            'number' => 'required|numeric',
            'emphasis' => 'required|max:40',
            'text' => 'max:500',
        ]);

        $aboutNumber->icon = $request->icon;
        $aboutNumber->icon_color = $request->icon_color;
        $aboutNumber->number = $request->number;
        $aboutNumber->emphasis = $request->emphasis;
        $aboutNumber->text = $request->text;
        $aboutNumber->save();

        return redirect('/bo/about');
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
    public function order(Request $request)
    {
        if ($request->order) {
            $ids = explode("/", $request->order);
            for ($i=0; $i < count($ids) ; $i++) { 
                $toOrder = $ids[$i];
                $itemDB = AboutNumber::find($toOrder);
                $itemDB->order = $i;
                $itemDB->save();
            }
        }

        // use a new order column & helper sortby (already added in web.php)
        return redirect()->back();
    }
}
