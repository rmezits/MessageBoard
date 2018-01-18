<?php

namespace project;

use Illuminate\Database\Eloquent\Model;

class GameComment extends Model
{
    protected $fillable = ['body', 'game_id', 'user_id'];
    
    public function game()
    {
        return $this->belongsTo(Game::class);
    }
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
