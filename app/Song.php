<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    protected $fillable = [
        'title',
        'artist_id',
        'youtube_url',
        'lyrics',
        'genre_id',
        'user_id',
    ];
}
