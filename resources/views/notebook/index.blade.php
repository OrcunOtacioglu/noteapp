@extends('layouts.app')

@section('title', 'All Notebooks')

@section('content')

	<div class="row">
		<div class="col-md-12">
			<div class="col-md-4" style="padding-left: 0 !important">
				<h1 style="margin-top: 0 !important;">@yield('title')</h1>
			</div>
			<div class="col-md-4 col-md-offset-4" style="padding-right: 0 !important;">
				<a href="{{ action('NotebookController@create') }}" class="btn btn-primary pull-right">Create New Notebook</a>
			</div>

			@if ($notebooks->isEmpty())
				<div class="alert alert-info" role="alert" style="margin-top: 50px;">
					<p>Sorry there are no notebooks to show!</p>
					<a href="{{ action('NotebookController@create') }}">Start creating some</a>
				</div>

			@else
				<table class="table table-hover">
					<thead>
						<tr>
							<td>/</td>
							<td>Name</td>
							<td>Owner</td>
							<td>Actions</td>
						</tr>
					</thead>
					<tbody>

						@foreach ($notebooks as $notebook)
							<tr>
								<td>{{ $notebook->id }}</td>
								<td>{{ $notebook->name }}</td>
								<td>{{ $notebook->description }}</td>
								<td>
									<a class="btn btn-link" href="{{ action('NotebookController@edit', ['id' => $notebook->id]) }}">Edit</a>
									<a style="color: #cc0000;" class="btn btn-link" href="{{ action('NotebookController@delete', $notebook->id) }}">Destroy</a>							
								</td>
							</tr>
						@endforeach

					</tbody>
				</table>
			@endif

		</div>
	</div>
@stop