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

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function comments(){
        return $this->hasMany(Comment::class);
    }

    public function feeds(){
        return $this->belongsToMany(Feed::class)->using(TweetFeed::class);
    }

    

/* 
    public function comment(){
        return $this->belongsTo(Comment::class);
    }
    public function feeds(){
        return $this->belongsToMany(Feed::class)->using(TweetFeed::class);
    }

    public function users(){
        return $this->hasMany(User::class);
    } */
}
