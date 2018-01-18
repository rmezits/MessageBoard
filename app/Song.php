<?php

namespace project;

use Illuminate\Database\Eloquent\Model;

class Song extends Model
{        
    public function comments()
    {
        return $this->hasMany(SongComment::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function addComment($body, $userid)
    {
        $this->comments()->create(['body' => $body, 'user_id' => $userid]);
    }
}
