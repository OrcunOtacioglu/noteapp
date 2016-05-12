@extends('layouts.app')

@section('title', 'Create a new note')

@section('content')
	@include('errors.list')

	<form method="POST" action="{{ action('NoteController@store') }}">
	
		{{ csrf_field() }}

		<div class="form-group">
			<label for="name">Name</label>
			<input type="text" name="name" id="name" class="form-control" placeholder="Name of the note">
		</div>

		<div class="form-group">
			<label for="content">Note Content</label>
			<textarea name="content" id="content" class="form-control" rows="10"></textarea>
	  	</div>
		
		<div class="form-group">
		  	<button type="submit" class="btn btn-primary">Create</button>
		  	<a href="{{ action('NoteController@index') }}">Cancel</a>
		</div>
	  	
	</form>
@stop