<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TweetFeed extends Model
{
    use HasFactory;
    protected $fillable = [
        'tweet_id',
        'feed_id',
    ];

    public function tweet(){
        return $this->belongsToMany(Tweet::class);
    }
    public function feed(){
        return $this->belongsToMany(Feed::class);
    }
}
