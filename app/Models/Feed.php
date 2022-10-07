<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feed extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
    ];


    public function tweetFeed(){
        return $this->belongsTo(TweetFeed::class);
    }

    public function users(){
        return $this->hasMany(User::class);
    }
}
