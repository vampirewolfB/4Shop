@extends('layouts.admin')

@section('content')
	
	<div class="d-flex justify-content-between align-items-center my-4">
		<h4>Winkelperiodes</h4>
		<div>
			<a href="{{ route('admin.dates.create') }}">Nieuwe periode toevoegen</a>
		</div>
	</div>

	<table class="table table-striped table-hover">
		<tr>
			<th>Startdatum</th>
			<th>Einddatum</th>
			<th>&nbsp;</th>
		</tr>
		@foreach($dates as $date)
			<tr>
				<td>{{ $date->start->toFormattedDateString() }}</td>
				<td>{{ $date->end->toFormattedDateString() }}</td>
				<td>
					<a href="{{ route('admin.dates.edit', $date->id) }}">Aanpassen</a>
				</td>
			</tr>
		@endforeach
	</table>
@endsection