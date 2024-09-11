@extends('layouts.admin')

@section('content')
	<div class="container">
		<h1>Ordini</h1>

		@if ($orders->isEmpty())
			<p>Nessun ordine disponibile.</p>
		@else
			<table class="table table-striped">
				<thead>
					<tr>
						<th>Nome Cliente</th>
						<th>Data Ordine</th>
						<th>Totale</th>
						<th>Dettagli Ordine</th>
					</tr>
				</thead>
				<tbody>
					@foreach ($orders as $order)
						<tr>
							<td>{{ $order->name_client }}</td>
							<td>{{ $order->created_at->format('d/m/Y H:i') }}</td>

							<td>€{{ number_format($order->total, 2) }}</td>
							<td>
								<a href="{{ route('admin.orders.show', $order->id) }}">Dettagli ordine
									<i class="fa-solid fa-circle-info"></i>
								</a>
							</td>
						</tr>
					@endforeach
				</tbody>
			</table>
		@endif
		<div class="text-center">
			<a href="{{ route('admin.dashboard') }}" class="btn btn-outline-success my-2 py-1 px-3">Torna al ristorante
				<i class="fa-solid fa-plate-wheat fa-lg fa-fw"></i></a>
		</div>
	</div>
@endsection
