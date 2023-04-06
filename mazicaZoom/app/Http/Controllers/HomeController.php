<?php

namespace App\Http\Controllers;

use App\Models\commentairs;
use App\Models\pieceMusical;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function show(string $id)
    {
        $piece = pieceMusical::findOrFail($id);
        
        $commentairs = $piece->commentairs;
        return view('player',['piece' => $piece,'commentairs'=>$commentairs]);
    }
}
