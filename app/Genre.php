<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    protected $fillable = [
        'display_name',
        'name',
        'description',
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
