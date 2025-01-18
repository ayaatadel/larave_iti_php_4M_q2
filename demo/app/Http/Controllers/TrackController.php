<?php

namespace App\Http\Controllers;

use App\Models\Track;
use Illuminate\Http\Request;

class TrackController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $tracks=Track::orderBy('created_at',"desc")-> paginate(3);
        return view('tracks.index',compact('tracks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('tracks.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
         'name'=>'required|unique:tracks|min:2',
         'description'=>"required|unique:tracks|min:10|max:30"
        ],[
            'name.required'=>"track name is required",
            'name.unique'=>"track name already exist",
            'name.min'=>"track name should be more than or equal 2 characters ",
            'description.required'=>"track description is required",
            'description.unique'=>"track description already exist",
            'description.min'=>"track description should be more than or equal 10 characters ",
        ]
    );
        $requestData=$request->all();
        // dump($requestData);
        Track::create($requestData);
        return to_route('tracks.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Track $track)//$track ==>id  , Track $track ==> object track
    {
        //
        // dump($track);  // after relation ==> array[students]==> students
        return view('tracks.show',compact('track'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Track $track)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Track $track)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Track $track)
    {
        //
        $track->delete();
        return to_route('tracks.index');

    }
}
