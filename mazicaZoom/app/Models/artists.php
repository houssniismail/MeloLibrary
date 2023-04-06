<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class artists extends Model
{
    use HasFactory;
    protected $fillable = [
        'image',
        'nom',
        'pays',
        'date_de_naissance',
];
}
