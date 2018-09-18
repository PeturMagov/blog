@extends('layouts.app')

@section('content')

@include('admin.includes.errors')
	<div class="card">
		<div class="card-header">
			Update the tag: {{ $tag->tag }}
		</div>
		<div class="card-body">
			<form method="post" enctype="multipart/form-data" action="{{ route('tag.update', ['id' => $tag->id]) }}">
				{{ csrf_field() }}
				<div class="form-group">	
					<label for="tag">Tag</label>
					<input type="text" name="tag" class="form-control" value="{{ $tag->tag }}">
				</div>
				<div class="form-group">	
					<div class="text-center">
						<button class="btn btn-success" type="submit">Update the Tag</button>
					</div>
				</div>
			</form>
		</div>
	</div>
@endsection