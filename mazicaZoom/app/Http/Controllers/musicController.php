<?php

namespace App\Http\Controllers;

use App\Models\pieceMusical;
use Illuminate\Http\Request;

class musicController extends Controller
{
    public function show(string $id)
    {
        // $piece = pieceMusical::find($id);
        return view('player');
    }
}
