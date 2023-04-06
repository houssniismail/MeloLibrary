<?php

namespace App\Http\Controllers;


use App\Models\pieceMusical;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Storage;

class pieceMusicalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         $pieces = pieceMusical::all();
      
        return view('pieceMusical.index', compact('pieces'));
    }
    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pieceMusical.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'audio'=>'required|mimes:audio/mpeg,mpga,mp3,wav',
            'image'=>'required|image|max:2048',
            'titre'=>'required|string|max:255',
            'artists'=>'required|string|max:255',
            'ecrivan'=>'required|string|max:255',
            'langeu'=>'required|string|max:255',
            'date_de_sortie'=>'required|date',
        ]);
// Upload the audio file
        $audio = $request->file('audio');
        $audioPath = $audio->store('public/audios');
        $audioPath = str_replace('public/audios', '', $audioPath);
        $audio->move(public_path('/audios'), $audioPath);
// Upload the image file
        $image = $request->file('image');
        $imagePath = $image->store('public/images');
        $imagePath = str_replace('public/images/', '', $imagePath);
        $image->move(public_path('/images'), $imagePath);
        


        $piece = new pieceMusical($validatedData);
        $piece->audio = $audioPath;
        $piece->image = $imagePath;
        $piece->save();

        return redirect('/pieceMusical');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $piece = pieceMusical::find($id);
        return view('pieceMusical.show',['piece' => $piece]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $piece = pieceMusical::find($id);
        return view('pieceMusical.edit',['piece' => $piece]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'audio'=>'nullable|mimes:audio/mpeg,mpga,mp3,wav',
            'image'=>'nullable|image|max:2048',
            'titre'=>'required|string|max:255',
            'artists'=>'required|string|max:255',
            'ecrivan'=>'required|string|max:255',
            'langeu'=>'required|string|max:255',
            'date_de_sortie'=>'required|date',
        ]);
        $pieceMusical = pieceMusical::findOrFail($id);
        // Update the audio file if it has been changed
        if ($request->hasFile('audio')) {
            $audio = $request->file('audio');
            $audioPath = $audio->store('public/audios');
            $audioPath = str_replace('public/audios/', '', $audioPath);
            $audio->move(public_path('/audios'), $audioPath);
            Storage::delete('public/audios/' . $pieceMusical->audio);
            $pieceMusical->audio = $audioPath;
        }
    
        // Update the image file if it has been changed
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imagePath = $image->store('public/images');
            $imagePath = str_replace('public/images/', '', $imagePath);
            $image->move(public_path('/images'), $imagePath);
            Storage::delete('public/images/' . $pieceMusical->image);
            $pieceMusical->image = $imagePath;
        }
    
        
        $pieceMusical->save();
    
        return redirect('/pieceMusical');
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        pieceMusical::destroy($id);
        return redirect('/pieceMusical');
    }

    public function search(Request $request)
{
    $searchTerm = $request->input('search');
    $pieces = pieceMusical::where('titre', 'LIKE', '%'.$searchTerm.'%')
                        ->orWhere('artists', 'LIKE', '%'.$searchTerm.'%')
                        ->orWhere('langeu', 'LIKE', '%'.$searchTerm.'%')
                        ->get();
    return view('home', compact('pieces'));
}
}
