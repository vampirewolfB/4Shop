@extends('layouts.admin')

@section('content')

<div class="d-flex justify-content-center my-5"> 

	<form action="{{ route('admin.dates.store') }}" method="POST">
		
		<h4>Nieuwe winkelperiode</h4>

		<div class="form-group">
			<label for="start">Openingsdatum</label>
			<input type="date" id="start" name="start" class="form-control">
		</div>
		<div class="form-group">
			<label for="end">Sluitingsdatum</label>
			<input type="date" id="end" name="end" class="form-control">
		</div>

		<button type="submit" class="form-control btn btn-primary my-2">Opslaan</button>
		{{ csrf_field() }}
	</form>
</div>

@endsection
