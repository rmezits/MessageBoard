
@extends('layouts.master')
<link href="{{ asset('/css/app.css') }}" rel="stylesheet"/>
@section('content')

@if( auth()->check() )
    <p>
        <a href="/games/create">Submit Game thread</a>
    </p>
@endif

<ul>
    @foreach($games as $game)
        <div class="col-12 mb-3">
            <div class="card">
                <div class="card-block">                    
                    <h3 class="card-title"><a href="/games/{{ $game->id }}">{{ $game->title }}</a></h3>
                    <p class="card-text">Additional comment: {{ $game->poster }}</p>
                    <p class="small">Game submitted by user {{ $game->user->name }}</p>
                    <a href="/games/{{ $game->id }}" class="btn btn-primary">Comment</a>
                </div>
            </div>
        </div>
    @endforeach
</ul>
 
@endsection


