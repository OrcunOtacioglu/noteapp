@extends('layouts.app')

@section('title', 'Create a new note')

@section('content')
	<form method="POST" action="{{ action('NoteController@store') }}">
	  <div class="form-group">
	    <label for="name">Name</label>
	    <input type="text" class="form-control" id="name" placeholder="Name of the note">
	  </div>
	  <div class="form-group">
	  	<label for="content">Note Content</label>
	  	<textarea id="content" class="form-control" rows="10">
	  		
	  	</textarea>
	  </div>
	  <button type="submit" class="btn btn-primary">Create</button>
	  <a href="{{ action('NoteController@index') }}">Cancel</a>
	</form>
@stop