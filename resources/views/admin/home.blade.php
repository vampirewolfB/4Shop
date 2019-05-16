@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-center my-5">
    
	<form action="{{ route('admin.set') }}" method="POST">
		<select name="date" class="form-control my-2">
			<option value=""> - Kies een periode - </option>
			@foreach($OpeningDates as $date)
				<option value="{{ $date->id }}">{{ $date->start->toFormattedDateString() }} - {{ $date->end->toFormattedDateString() }}</option>
			@endforeach
		</select>
		<button type="submit" class="form-control btn btn-primary my-2">Selecteer periode &gt;</button>
		<button class="form-control btn btn-outline-primary my-2">Nieuwe periode maken</button>
		{{ csrf_field() }}
	</form>

</div>	
@endsection
