<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tweet extends Model
{
    use HasFactory;

    protected $fillable = [
        'message',
        'user_id',
    ];


    public function comment(){
        return $this->belongsTo(Comment::class);
    }
    public function tweetFeed(){
        return $this->belongsTo(TweetFeed::class);
    }

    public function users(){
        return $this->hasMany(User::class);
    }
}
