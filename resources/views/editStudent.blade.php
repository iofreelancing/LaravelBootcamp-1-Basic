@extends('mainLayout')


@section('content')
<form class="form" action="{{ url('/update/'.$student->studentId) }}" method="post">
	{{ csrf_field() }}
	<div class="form-group">
		<label for="name">Name</label>
		<input class="form-control" value="{{ $student->name }}" name="name" id="name" />
	</div>

	<input class="btn btn-primary" type="submit" name="submit" value="Update">
</form>
@endsection

@section('title')
Edit Student: {{ $student->name }}
@endsection