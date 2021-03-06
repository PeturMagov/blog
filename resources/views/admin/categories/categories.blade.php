@extends('layouts.app')

@section('content')
	<div class="card">
		<div class="card-body">
			<table class="table table-hover">
				<tr>
					<th>Name</th>
					<th></th>
					<th></th>
				</tr>
				@foreach($categories as $category)
				<tr>
					<td>{{ $category->name }}</td>
					<td><a href="{{ route('category.edit', ['id' => $category->id]) }}" class="btn btn-info btn-sm">Edit</a></td>
					<td><a href="{{ route('category.delete', ['id' => $category->id]) }}" class="btn btn-danger btn-sm">Delete</a></td>
				</tr>	
				@endforeach
			</table>
		</div>
	</div>
@endsection