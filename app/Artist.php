<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    protected $fillable = [
        'first_name',
        'last_name',
        'name',
        'user_id',
    ];

    public function users()
    {
        return $this->belongsToMany('App\User');
    }

    public function songs()
    {
        return $this->hasMany('App\Song');
    }
}
