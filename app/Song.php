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

    public function artist()
    {
        return $this->belongsTo('App\Artist');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
