<?php

namespace App\Http\Controllers;

use App\Models\commentairs;
use Illuminate\Http\Request;

class commentairsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $commentairs = commentairs::all();
        
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
        $validatedData = $request->validate([
            'user_id' => 'required',
            'piece_musical_id' => 'required',
            'text' => 'required'
        ]);
    
        $coment = new commentairs($validatedData);
        $coment->save();
        return redirect()->back()->with('success', 'comments created successfully!');
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
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
