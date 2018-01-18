<?php

namespace project\Http\Controllers;

use Illuminate\Http\Request;
use project\Song;

class SongsController extends Controller
{
    public function index()
    {
        $songs = Song::all();    
        return view('songs.index', ['songs' => $songs]);
    }
    
    public function show(Song $id)
    { 
        return view('songs.show', ['song' => $id]);
    }
    
    public function create()
    {
        return view('songs.create');
    }
    
    public function store()
    {        
        $this->validate(request(), [
            'title' => 'required|unique:songs',
            'poster' => 'required',
        ]);
        
        $song = new Song;
        
        $song->title = request('title');
        $song->poster = request('poster');
        $song->user_id = auth()->id();
        $song->save();
        
        return redirect()->to('/songs');
    }
}
