<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bands extends Model
{
    use HasFactory;

    protected $fillable = [
              'nom',
              'image',
              'member',
              'pays',
              'date_de_creataion'
    ];
}
