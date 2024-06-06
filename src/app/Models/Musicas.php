<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Musicas extends Model
{
    use HasFactory;

    // protected $table = '';

    // protected $primaryKey = '';

    protected $fillable = [
        'title',
        'artist',
        'imageUrl',
        'audioUrl',
    ];

}


