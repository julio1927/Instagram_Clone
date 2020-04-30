<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $guarded = []; // dont guard anything, naming each field so its okay

    public function user()
    {
        return $this->belongsTo(User::class); // Makes Many:1 relationship with Posts and user 
    }
}
