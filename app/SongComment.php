<?php

namespace project;

use Illuminate\Database\Eloquent\Model;

class SongComment extends Model
{        
    protected $fillable = ['body', 'game_id', 'user_id'];    
    
    public function song()
    {                
        return $this->belongsTo(song::class);
    }
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
