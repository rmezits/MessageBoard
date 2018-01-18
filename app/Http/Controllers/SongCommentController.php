<?php
 
namespace project\Http\Controllers;
 
use Illuminate\Http\Request;
use project\Song;
use project\SongComment;
 
class SongCommentController extends Controller
{    
    public function store(Song $song)
    {
        $this->validate(request(), [
            'body' => 'required|min:3'
        ]);
        
        $song->addComment(request('body'), auth()->id());
        
        return back();
    }
}
