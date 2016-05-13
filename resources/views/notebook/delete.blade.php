@extends('layouts.app')

@section('title', 'Delete Notebook')

@section('content')
	<form method="POST" action="{{ action('NotebookController@destroy', $notebook->id) }}">
		
		{{ csrf_field() }}
		{{ method_field('DELETE') }}

		<p>Are you sure you want to delete {{ $notebook->name }}?</p>

		<div class="form-group">
	  		<button type="submit" class="btn btn-danger">Delete</button>
	  		<a href="{{ action('NotebookController@index') }}">Cancel</a>	  		
	  	</div>

	</form>
@stop