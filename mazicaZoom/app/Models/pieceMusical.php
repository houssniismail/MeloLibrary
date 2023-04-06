<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class pieceMusical extends Model
{
    use HasFactory;
    protected $fillable = [
        'audio',
        'image',
        'titre',
        'artists',
        'ecrivan',
        'langeu',
        'date_de_sortie',
    ];
    public function commentairs(){
        return $this->hasMany('App\Models\commentairs');
    } 
}
