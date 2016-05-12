@extends('layouts.app')

@section('title', 'Edit note')

@section('content')
	@include('errors.list')

	<form method="POST" action="{{ action('NoteController@update', ['id' => $note->id]) }}">
		
		{{ method_field('PUT') }}
		{{ csrf_field() }}

	  	<div class="form-group">
	    	<label for="name">Name</label>
	    	<input type="text" name="name" id="name" class="form-control" placeholder="Name of the note" value="{{ $note->name }}">
	  	</div>

	  	<div class="form-group">
	  		<label for="content">Note Content</label>
	  		<textarea name="content" id="content" class="form-control" rows="10">{{ $note->content }}</textarea>
	  	</div>

	  	<div class="form-group">
	  		<button type="submit" class="btn btn-primary">Update</button>
	  		<a href="{{ action('NoteController@index') }}">Cancel</a>	  		
	  	</div>

	</form>

@stop