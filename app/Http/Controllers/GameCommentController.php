<?php

namespace project\Http\Controllers;

use Illuminate\Http\Request;
use project\Game;
use project\GameComment;

class GameCommentController extends Controller
{
    public function index()
    {
        $reviews = GameComment::orderBy('id','desc');
        return view('reviews.index', ['reviews' => $reviews]);
    }
    
    public function store(Game $game)
    {
        
        $this->validate(request(), [
            'body' => 'required|min:3'
        ]);
        
        $game->addComment(request('body'), auth()->id());
        
        
        return back();
    }
    
    public function delete($id)
    {

        GameComment::find($id)->delete();

        return back();

    }
}
