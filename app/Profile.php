<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $guarded = [];

    
    public function profileImage()
    {
        $imagePath = ($this->image ) ? $this->image : '/profile/JYpcD88B0mcmcq1FghMHNvBrDk5TH420P3YW0hlp.png';

        // returns users profile image or default image 
        return '/storage/'. $imagePath; 
    }


    public function user()
    {
        return $this->belongsTo(User::class); // Makes 1:1 relationship with user and profile 
    }
}
