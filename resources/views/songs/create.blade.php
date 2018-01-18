@extends('layouts.master')
 
@section('content')
 
    <h2>Add a thread about songs</h2>
 
    <form method="post" action="/songs" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="form-group row">
            <label for="titleid" class="col-sm-3 col-form-label">Thread Title</label>
            <div class="col-sm-9">
                <input name="title" type="text" class="form-control" id="titleid" placeholder="Thread Title" value="{{ old('title') }}">
            </div>
        </div>
        <div class="form-group row">
            <label for="posterid" class="col-sm-3 col-form-label">Additional comments</label>
            <div class="col-sm-9">
                <input name="poster" type="text" class="form-control" id="posterid"
                       placeholder="Additional comments" value="{{ old('poster') }}">
            </div>
        </div>
        <div class="form-group row">
            <div class="offset-sm-3 col-sm-9">
                <button type="submit" class="btn btn-primary">Submit Song</button>
            </div>
        </div>
         @include('partials.formerrors')
 
@endsection