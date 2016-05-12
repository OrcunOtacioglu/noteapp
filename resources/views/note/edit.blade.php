@extends('layouts.app')

@section('title', 'Edit note')

@section('content')
	<form method="POST" action="{{ action('NoteController@update', ['id' => $note->id]) }}">
	  <div class="form-group">
	    <label for="name">Name</label>
	    <input type="text" class="form-control" id="name" placeholder="Name of the note" value="{{ $note->name }}">
	  </div>
	  <div class="form-group">
	  	<label for="content">Note Content</label>
	  	<textarea id="content" class="form-control" rows="10">{{ $note->content }}</textarea>
	  </div>
	  <button type="submit" class="btn btn-primary">Update</button>
	  <a href="{{ action('NoteController@index') }}">Cancel</a>
	</form>

@stop