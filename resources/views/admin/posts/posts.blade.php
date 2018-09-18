@extends('layouts.app')

@section('content')
	<div class="card">
		<div class="card-body">
			<table class="table table-hover">
				<tr>
					<th>Image</th>
					<th>Title</th>
					<th></th>
					<th></th>
				</tr>
				@foreach($posts as $post)
				<tr>
					<td><img src="{{ $post->featured }}" width="70px" height="50px"></td>
					<td>{{ $post->title }}</td>
					<td><a href="{{ route('post.edit', ['id' => $post->id]) }}" class="btn btn-info btn-sm">Edit</a></td>
					<td><a href="{{ route('post.delete', ['id' => $post->id]) }}" class="btn btn-danger btn-sm">Trash</a></td>
				</tr>	
				@endforeach
			</table>
		</div>
	</div>
@endsection