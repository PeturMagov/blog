@extends('layouts.app')

@section('content')

@include('admin.includes.errors')
	<div class="card">
		<div class="card-header">
			Create a new user
		</div>
		<div class="card-body">
			<form method="post" enctype="multipart/form-data" action="{{ route('user.store') }}">
				{{ csrf_field() }}
				<div class="form-group">	
					<label for="name">Name</label>
					<input type="text" name="name" class="form-control">
				</div>
				<div class="form-group">	
					<label for="password">Password</label>
					<input type="password" name="password" class="form-control">
				</div>
				<div class="form-group">	
					<label for="email">Email</label>
					<input type="email" name="email" class="form-control">
				</div>
				<div class="form-group">	
					<div class="text-center">
						<button class="btn btn-success" type="submit">Add User</button>
					</div>
				</div>
			</form>
		</div>
	</div>
@endsection