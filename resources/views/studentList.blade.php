@extends('mainLayout')
@section('title')
Student List ({{ $result->count() }})
			<a href="{{ url('/create') }}" class="btn btn-primary pull-right">Create</a>
@endsection
@section('content')

		<table class="table table-striped">
			<thead>
				<th>Student Id</th>
				<th>Name</th>
				<th>Date Created</th>
				<th>Action</th>
			</thead>
			<tbody>
				@foreach($result as $student)
				<tr>
					<td>{{ $student->studentId }}</td>
					<td>{{ $student->name }}</td>
					<td>{{ $student->created_at }}</td>
					<td>
						<a href="{{ url('/edit/'.$student->studentId) }}" class="btn">Edit</a>
						<a href="{{ url('/delete/'.$student->studentId) }}" class="btn">Delete</a>
						<a href="{{ url('/show/'.$student->studentId) }}" class="btn">View</a>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
@endsection


@section('footerScripts')
<script>
	//alert('hi Im in footer');
</script>
@endsection