@extends('layouts.admin')

@section('content')
	
	<h4>Bestellingen ({{ $date->start->toFormattedDateString() }} - {{ $date->end->toFormattedDateString() }})</h4>
	<table class="table table-striped table-hover">
		<tr>
			<th>#</th>
			<th>Naam</th>
			<th>Speltak</th>
			<th>Bedrag</th>
			<th>Betaling</th>
			<th>Levering</th>
		</tr>
		@foreach($orders as $order)
			<tr>
				<td>
					<a href="{{ route('admin.orders.show', $order->id) }}">{{ $order->slug }}</a>
				</td>
				<td>{{ $order->name }}</td>
				<td>{{ ucfirst($order->speltak) }}</td>
				<td>&euro;{{ number_format($order->amount, 2) }}</td>
				<td>
					{!! $order->payed ? '<span class="badge badge-success">betaald</span>' : '<span class="badge badge-warning">niet betaald</span>' !!}
				</td>
				<td>
					@if($order->delivered)
						<span class="badge badge-success">geleverd</span>
					@else
						<a href="{{ route('admin.orders.deliver', $order) }}"><span class="badge badge-light">niet geleverd</span></a>
					@endif
				</td>
			</tr>
		@endforeach
	</table>
@endsection