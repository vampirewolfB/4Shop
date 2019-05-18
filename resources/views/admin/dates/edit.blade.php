@extends('layouts.admin')

@section('content')

<div class="d-flex align-items-center flex-column my-5"> 

	<form action="{{ route('admin.dates.update', $date) }}" method="POST">
		
		<h4>Winkelperiode aanpassen</h4>

		<div class="form-group">
			<label for="start">Openingsdatum</label>
			<input type="date" id="start" name="start" class="form-control" value="{{ $date->start->format('Y-m-d') }}">
		</div>
		<div class="form-group">
			<label for="end">Sluitingsdatum</label>
			<input type="date" id="end" name="end" class="form-control" value="{{ $date->end->format('Y-m-d') }}">
		</div>

		<button type="submit" class="form-control btn btn-primary my-2">Opslaan</button>
		{{ csrf_field() }}
		{{ method_field('PATCH') }}
	</form>
	<form action="{{ route('admin.dates.destroy', $date) }}" method="POST">
		<button type="submit" class="form-control btn btn-outline-danger">Verwijderen</button>
		{{ csrf_field() }}
		{{ method_field('DELETE') }}
	</form>
</div>

@endsection
