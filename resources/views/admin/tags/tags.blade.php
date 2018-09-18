@extends('layouts.app')

@section('content')
	<div class="card">
		<div class="card-body">
			<table class="table table-hover">
				<tr>
					<th>Tag</th>
					<th></th>
					<th></th>
				</tr>
				@foreach($tags as $tag)
				<tr>
					<td>{{ $tag->tag }}</td>
					<td><a href="{{ route('tag.edit', ['id' => $tag->id]) }}" class="btn btn-info btn-sm">Edit</a></td>
					<td><a href="{{ route('tag.delete', ['id' => $tag->id]) }}" class="btn btn-danger btn-sm">Delete</a></td>
				</tr>	
				@endforeach
			</table>
		</div>
	</div>
@endsection