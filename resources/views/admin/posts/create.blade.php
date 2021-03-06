@extends('layouts.app')

@section('content')

@include('admin.includes.errors')
	<div class="card">
		<div class="card-header">
			Create a new post
		</div>
		<div class="card-body">
			<form method="post" enctype="multipart/form-data" action="{{ route('post.store') }}">
				{{ csrf_field() }}
				<div class="form-group">	
					<label for="title">Title</label>
					<input type="text" name="title" class="form-control">
				</div>
				<div class="form-group">
					<label for="category">Category</label>
					<select name="category_id" id="category" class="form-control">
						@foreach($categories as $category)
							<option value="{{ $category->id }}">{{ $category->name }}</option>
						@endforeach
					</select>
				</div>
				<div class="form-group">
					<label for="tag">Tag</label>
					@foreach($tags as $tag)
						<div class="checkbox">
							<label><input type="checkbox" name="tags[]" value="{{ $tag->id }}">{{ $tag->tag }}</label>
						</div>
					@endforeach
				</div>
				<div class="form-group">	
					<label for="featured">Featured Image</label>
					<input type="file" name="featured" class="form-control">
				</div>
				<div class="form-group">	
					<label for="content">Content</label>
					<textarea name="content" cols="5" rows="5" class="form-control"></textarea>
				</div>
				<div class="form-group">	
					<div class="text-center">
						<button class="btn btn-success" type="submit">Store Post</button>
					</div>
				</div>
			</form>
		</div>
	</div>
@endsection