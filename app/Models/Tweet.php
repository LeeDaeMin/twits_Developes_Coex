<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\TweetFeed;

class Tweet extends Model
{
    use HasFactory;
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    public function feed()
    {
        return $this->belongsToMany(Feed::class)->using(TweetFeed::class);
    }
}