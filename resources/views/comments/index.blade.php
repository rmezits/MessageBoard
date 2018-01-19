@extends('layouts.master')
 
@section('content')
 
    @foreach($comments as $review)
        <div class="col-12 mb-3">
            <div class="card">
                <div class="card-block">
 
                    <p class="card-text">{{ $review->user->name }} left a comment
                        for <a
                                href="/songs/{{ $review->song->id }}">{{ $review->song->title }}</a> {{$review->created_at->diffForHumans()}}
                    </p>
                </div>
            </div>
        </div>
    @endforeach
 
@endsection
