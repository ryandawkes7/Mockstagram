<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $guarded = [];

    // Set profile image - if user hasn't uploaded, set to default
    public function profileImage()
    {
        $imagePath = ($this->image) ? $this->image : 'profile/Lzh9o5oJYAUEoQelgNIlgoO2phI5GB3eHBnS0LRU.png';
        return '/storage/' . $imagePath;
    }

    public function followers()
    {
        return $this->belongsToMany(User::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
