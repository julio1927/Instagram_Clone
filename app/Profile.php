<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class); // Makes 1:1 relationship with user and profile 
    }
}
