@extends('mainLayout')

@section('content')
		<h1 class="page-header">Student Data
			<a href="{{ url('/create') }}" class="btn btn-primary pull-right">Create</a>
			<a href="{{ url('/list') }}" class="btn btn-primary pull-right">List</a>

		</h1>
		<table class="table table-striped">
			<thead>
				<th>Student Id</th>
				<th>Name</th>
				<th>Date Created</th>
				<th>Action</th>
			</thead>
			<tbody>
				
				<tr>
					<td>{{ $student->studentId }}</td>
					<td>{{ $student->name }}</td>
					<td>{{ $student->created_at }}</td>
					<td>
						<a href="{{ url('/edit/'.$student->studentId) }}" class="btn">Edit</a>
						<a href="{{ url('/delete/'.$student->studentId) }}" class="btn">Delete</a>
					</td>
				</tr>
				
			</tbody>
		</table>
@endsection