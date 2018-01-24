@extends('layouts.master')
 
@section('content')
 
    <div class="card" style="width: 270px;margin: 5px">
        <!--<img class="card-img-top" src="/{{ $game->title }}.png" alt="Card image cap">-->
        <div class="card-block">
            <a href="/games" class="btn btn-primary">List Games</a>
            <h3 class="card-title">{{ $game->title }}</h3>
            <p class="card-text">{{ $game->title }} Additional comments: {{ $game->poster }}</p>
            <p class="small">Game submitted by user {{ $game->user->name }}</p>
        </div>
    </div>
    <hr>
    
    <div class="comments">
        <h4>What Gamers Are Saying</h4>
        <ul class="list-group">
            @foreach($game->comments as $comment)
                @if( auth()->check() === false)
                @elseif( auth()->user()->isAdmin === 1 )
                    <button><a href="{{URL::to('/deletegc/'.$comment->id)}}">Admin Delete</a></button>
                @elseif( auth()->id() === $comment->user_id )
                    <button><a href="{{URL::to('/deletegc/'.$comment->id)}}">Delete</a></button>
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
    <div class="addreview">
        <div class="card-block">
            <form method="POST" action="/games/{{ $game->id }}/reviews">
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