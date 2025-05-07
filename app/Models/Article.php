<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use function Laravel\Prompts\intro;

class Article extends Model
{
    protected $fillable = [
        'titolo',
        'data',
        'introduzione',
        'contenuto',
        'autore',
        'immagine',
    ];
}
