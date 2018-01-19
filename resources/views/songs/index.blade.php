@extends('layouts.master')
@section('content')

@if( auth()->check() )
        <p>
            <a href="/songs/create">Submit Song thread</a>
        </p>
@endif
<ul>
@foreach($songs as $song)
    <div class="col-12 mb-3">
            <div class="card">
                <div class="card-block">
                    <h3 class="card-title"><a href="/songs/{{ $song->id }}">{{ $song->title }}</a></h3>
                    <p class="card-text">Additional comment: {{ $song->poster }}</p>
                    <p class="small">Song thread submitted by user {{ $song->user->name }}</p>
                    <a href="/songs/{{ $song->id }}" class="btn btn-primary">Comment</a>
                </div>
            </div>
        </div>
</ul>
@endforeach
 
@endsection
