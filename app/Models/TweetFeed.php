<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;

class TweetFeed extends Pivot
{
    use HasFactory;
    protected $fillable = [
        'tweet_id',
        'feed_id',
    ];

   
}
