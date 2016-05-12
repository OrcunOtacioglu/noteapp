@extends('layouts.app')

@section('title', 'Delete Note')

@section('content')
	<form method="POST" action="{{ action('NoteController@destroy', $note->id) }}">
		
		{{ csrf_field() }}
		{{ method_field('DELETE') }}

		<p>Are you sure you want to delete {{ $note->name }}?</p>

		<div class="form-group">
	  		<button type="submit" class="btn btn-danger">Delete</button>
	  		<a href="{{ action('NoteController@index') }}">Cancel</a>	  		
	  	</div>

	</form>
@stop