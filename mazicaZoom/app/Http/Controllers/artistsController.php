<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\artists;
use Illuminate\Http\Request;

class artistsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
        $artists = artists::all();
        return view('/articets/index',compact('artists'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $artist = new artists;
        $artist->nom = $request->input('nom');
        $artist->image = $request->input('image');
        $artist->pays = $request->input('pays');
        $artist->date_de_naissance = $request->input('date_de_naissance');
        $artist->save();
    
        return redirect()->back()->with('success', 'Band created successfully!');
    }
    
    

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(string $id)
    {
        // dd($id);
        $user = User::find($id);
        $user->I_want_to_become_an_artist = true;
        $user->save();
        return redirect()->back()->with('success', 'Band created successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
