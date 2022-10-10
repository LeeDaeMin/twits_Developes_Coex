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


    public function tweets(){
        return $this->belongsToMany(Tweet::class)->using(TweetFeed::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    


/*     public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function tweets(){
        return $this->belongsToMany(Tweet::class);
    }
 */
}
