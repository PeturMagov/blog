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
					<th></th>
				</tr>
			@if($posts->count() >0)	
				@foreach($posts as $post)
				<tr>
					<td><img src="{{ $post->featured }}" width="70px" height="50px"></td>
					<td>{{ $post->title }}</td>
					<td><a href="{{ route('post.restore', ['id' => $post->id]) }}" class="btn btn-success btn-sm">Restore</a></td>
					<td><a href="{{ route('post.edit', ['id' => $post->id]) }}" class="btn btn-info btn-sm">Edit</a></td>
					<td><a href="{{ route('post.kill', ['id' => $post->id]) }}" class="btn btn-danger btn-sm">Destroy</a></td>
				</tr>	
				@endforeach
			@else	
				<tr>
					<th colspan="5" class="text-center">No trashed posts</th>
				</tr>
			@endif	
			</table>
		</div>
	</div>
@endsection