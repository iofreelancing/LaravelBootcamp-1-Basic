@extends('mainLayout')

@section('content')
		<h1 class="page-header">Create Student</h1>
		<form class="form" action="{{ url('/store') }}" method="post">
			{{ csrf_field() }}
			<div class="form-group">
				<label for="name">Name</label>
				<input class="form-control" name="name" id="name" />
			</div>

			<input class="btn btn-primary" type="submit" name="submit" value="Create">
		</form>
@endsection