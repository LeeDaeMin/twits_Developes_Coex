<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = [
        'message',
        'user_id',
        'tweet_id',
    ];

    public function tweets(){
        return $this->hasMany(Tweet::class);
    }
    public function users(){
        return $this->hasMany(User::class);
    }
}
