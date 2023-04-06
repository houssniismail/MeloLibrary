<?php

namespace App\Http\Controllers;

use App\Models\bands;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class bandsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {  
         $bands = bands::all();
        return view('/bands/index',compact('bands'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('bands.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nom' => 'required|string|max:255',
            'image' => 'required|image|max:2048',
            'member'=>'required',
            'pays' => 'required',
            'date_de_creataion' => 'required|date',
        ]);

        $image = $request->file('image');
        $imagePath = $image->store('public/images');
        $imagePath = str_replace('public/images/', '', $imagePath);
        $image->move(public_path('/images'), $imagePath);

        $bands = new bands($validatedData);
        $bands->image = $imagePath;
        $bands->save();

        return redirect('/bands');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $bande = bands::find($id);
        return view('bands.show',['bande' => $bande]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $bande = bands::find($id);
        return view('bands.edit',['bande' => $bande]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'nom' => 'required|string|max:255',
            'image' => 'image|max:2048',
            'member'=>'required',
            'pays' => 'required',
            'date_de_creataion' => 'required|date',
        ]);
    
        $bands = Bands::findOrFail($id);
    
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imagePath = $image->store('public/images');
            $imagePath = str_replace('public/images/', '', $imagePath);
            $image->move(public_path('/images'), $imagePath);
            Storage::delete('public/images/' . $bands->image);
            $bands->image = $imagePath;
        }
    
        $bands->nom = $validatedData['nom'];
        $bands->member = $validatedData['member'];
        $bands->pays = $validatedData['pays'];
        $bands->date_de_creataion = $validatedData['date_de_creataion'];
    
        $bands->save();
    
        return redirect('/bands');
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        bands::destroy($id);
        return redirect('/bands');
    }
}
