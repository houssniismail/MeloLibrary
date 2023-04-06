<?php

namespace App\Http\Livewire;

use Livewire\Component;

class PieceShow extends Component
{
    public $searchArtist;
    public $searchTitre;
    public $pieces;

    protected $listeners = ['searchUpdated' => 'search'];

    public function search()
    {
        $this->pieces = array_filter($this->pieces, function ($item) {
            return strpos(strtolower($item['artists']), strtolower($this->searchArtist)) !== false
                && strpos(strtolower($item['titre']), strtolower($this->searchTitre)) !== false;
        });
    }

    public function render()
    {
        return view('livewire.piece-show');
    }
}

