@extends('layouts.app')

@section('title', 'Edit notebook')

@section('content')
	@include('errors.list')

	<form method="POST" action="{{ action('NotebookController@update', ['id' => $notebook->id]) }}">
		
		{{ method_field('PUT') }}
		{{ csrf_field() }}

	  	<div class="form-group">
	    	<label for="name">Name</label>
	    	<input type="text" name="name" id="name" class="form-control" placeholder="Name of the note" value="{{ $notebook->name }}">
	  	</div>

	  	<div class="form-group">
	  		<label for="description">Note Description</label>
	  		<textarea name="description" id="description" class="form-control" rows="10">{{ $notebook->description }}</textarea>
	  	</div>

	  	<div class="form-group">
	  		<button type="submit" class="btn btn-primary">Update</button>
	  		<a href="{{ action('NotebookController@index') }}">Cancel</a>	  		
	  	</div>

	</form>

@stop