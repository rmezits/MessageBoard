@extends('layouts.master')
 
@section('content')
 
    <div class="card" style="width: 270px;margin: 5px">
        <div class="card-block">
            <h3 class="card-title">{{ $song->title }}</h3>
            <p class="card-text">{{ $song->title }} is published by {{ $song->poster }}</p>
            <p class="small">Song submitted by user {{ $song->user->name }}</p>
            <a href="/songs" class="btn btn-primary">List Songs</a>
        </div>
    </div>
 
<hr>
    
    <div class="comments">
        <h4>What Musicians Are Saying</h4>
        <ul class="list-group">
            @foreach($song->comments as $comment)
                @if( auth()->check() === false)
                @elseif( auth()->user()->isAdmin === 1 )
                    <button><a href="{{URL::to('/deletesc/'.$comment->id)}}">Admin Delete</a></button>
                @elseif( auth()->id() === $comment->user_id )
                    <button><a href="{{URL::to('/deletesc/'.$comment->id)}}">Delete</a></button>
                @endif
                <li class="list-group-item">{{ $comment->body }}
                    <hr>
                    <small class="text-primary">posted {{$comment->created_at->diffForHumans()}} by
                        user {{ $comment->user->name }}</small>
                </li>
            @endforeach
        </ul>
    </div>
    @if( auth()->check() )
    <div class="addcomment">
        <div class="card-block">
            <form method="POST" action="/songs/{{ $song->id }}/comments">
            {{ csrf_field() }}
                <div class="form-group">
                    <textarea name="body" class="form-control" placeholder="Add a comment!"></textarea>
                </div>
 
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Add a comment!</button>
                </div>
             @include('partials.formerrors')
            </form>
        </div>
    </div>
    @endif
@endsection
