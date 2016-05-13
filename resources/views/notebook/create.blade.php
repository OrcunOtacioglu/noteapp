@extends('layouts.app')

@section('title', 'Create a new notebook')

@section('content')
	@include('errors.list')

	<form method="POST" action="{{ action('NotebookController@store') }}">
	
		{{ csrf_field() }}

		<div class="form-group">
			<label for="name">Name</label>
			<input type="text" name="name" id="name" class="form-control" placeholder="Name of the notebook">
		</div>

		<div class="form-group">
			<label for="description">Note Content</label>
			<textarea name="description" id="description" class="form-control" rows="10"></textarea>
	  	</div>
		
		<div class="form-group">
		  	<button type="submit" class="btn btn-primary">Create</button>
		  	<a href="{{ action('NotebookController@index') }}">Cancel</a>
		</div>
	  	
	</form>
@stop