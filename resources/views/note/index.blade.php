@extends('layouts.app')

@section('title', 'All Notes')

@section('content')
	<div class="row">
		<div class="col-md-12">
			<a href="{{ action('NoteController@create') }}" class="btn btn-primary">Create New Note</a>
			@if ($notes->isEmpty())
				<div class="alert alert-info" role="alert">
					<p>Sorry there are no notes to show!</p>
					<a href="{{ action('NoteController@create') }}">Start creating some</a>
				</div>
			@else
				<table class="table table-hover">
					<thead>
						<tr>
							<td>#</td>
							<td>Name</td>
							<td>Owner</td>
							<td>Actions</td>
						</tr>
					</thead>
					<tbody>
						@foreach ($notes as $note)
							<tr>
								<td>{{ $note->id }}</td>
								<td>{{ $note->name }}</td>
								<td>{{ $note->user_id }}</td>
								<td>
									<a class="btn btn-link" href="{{ action('NoteController@edit', ['id' => $note->id]) }}">Edit</a>
									<a style="color: #cc0000;" class="btn btn-link" href="{{ action('NoteController@destroy', ['id' => $note->id]) }}">Destroy</a>							
								</td>
							</tr>
						@endforeach
					</tbody>
				</table>
			@endif
		</div>
	</div>
@stop