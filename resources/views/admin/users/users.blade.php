@extends('layouts.app')

@section('content')
	<div class="card">
		<div class="card-body">
			<table class="table table-hover">
				<tr>
					<th>Image</th>
					<th>Name</th>
					<th>Permissions</th>
					<th>Delete</th>
				</tr>
				@foreach($users as $user)
				<tr>
					<td><img src="/uploads/avatars/download.png" width="40px" height="40px" style="border-radius: 50px"></td>
					<td>{{ $user->name }}</td>
					<td>Permissions</td>
					<td>Delete</td>
				</tr>	
				@endforeach
			</table>
		</div>
	</div>
@endsection