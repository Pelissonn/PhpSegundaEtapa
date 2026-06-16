<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    protected $table = 'albuns';

    protected $fillable = [
        'nome',
        'artista',
        'ano_lancamento',
        'url_imagem',
    ];
}