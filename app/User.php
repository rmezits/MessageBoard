<?php

namespace project;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    
    public function setPasswordAttribute($password)
    {
        $this->attributes['password'] = bcrypt($password);
    }
    
    public function games()
    {
        return $this->hasMany(Game::class);
    }
    
    public function reviews()
    {
        return $this->hasMany(GameComment::class);
    }
    
    public function songs()
    {
        return $this->hasMany(Song::class);
    }
    
    public function comments()
    {
        return $this->hasMany(SongComment::class);
    }
    
    public function isAdmin()
    {
        return $this->admin;
    }
}
