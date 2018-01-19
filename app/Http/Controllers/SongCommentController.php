<?php
 
namespace project\Http\Controllers;
 
use Illuminate\Http\Request;
use project\Song;
use project\SongComment;
 
class SongCommentController extends Controller
{
    public function index()
    {
        $comments = SongComment::latest()->get();
        return view('comments.index', ['comments' => $comments]);
    }
    
    public function store(Song $song)
    {
        $this->validate(request(), [
            'body' => 'required|min:3'
        ]);
        
        $song->addComment(request('body'), auth()->id());
        
        return back();
    }
}
