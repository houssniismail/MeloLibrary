<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class commentairs extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'piece_musical_id',
        'text'
    ];
}
