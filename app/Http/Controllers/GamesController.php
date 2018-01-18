<?php

namespace project\Http\Controllers;

use Illuminate\Http\Request;
use project\Game;

class GamesController extends Controller
{
    public function index()
    {
         $games = Game::all();
        return view('games.index', ['games' => $games]);
    }

     public function show(Game $id)
    {
        return view('games.show', ['game' => $id]);
    }
    
    public function create()
    {
        return view('games.create');
    }
    
    public function store()
    {
        $this->validate(request(), [
            'title' => 'required|unique:games',
            'poster' => 'required',
        ]);
        
        $game = new Game;
        
        $game->title = request('title');
        $game->poster = request('poster');
        $game->user_id = auth()->id();
        
        $game->save();
        
        return redirect()->to('/games');
        
    }
    
    
}
