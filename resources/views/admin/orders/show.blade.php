@extends('layouts.admin')

@section('content')
	<div class="container my-3">
		<h1 class="text-center">Ordine n {{$order->id}}</h1>
			<table class="table table-striped">
				<thead>
					<tr>
						<th>Numero Identificativo Ordine</th>
						<th>Nome Cliente</th>
						<th>Email Cliente</th>
						<th>Numero di Telefono</th>
						<th>Indirizzo</th>
						<th>Data Ordine</th>
						<th>Dettagli Piatti</th>
						<th>Totale</th>


					</tr>
				</thead>
				<tbody>
						<tr>
							<td>{{ $order->id }}</td>
							<td>{{ $order->name_client }}</td>
							<td>{{ $order->email_client }}</td>
							<td>{{ $order->number_phone }}</td>
							<td>{{ $order->address_client }}</td>
							<td>{{ $order->created_at->format('d/m/Y H:i') }}</td>

							<td>
								@if ($order->dishes && $order->dishes->isNotEmpty())
									<ul>
										@foreach ($order->dishes as $dish)
											<li>
												{{ $dish->name }} - €{{ number_format($dish->price, 2) }} - Quantità:
												{{ $dish->pivot->quantity }}
											</li>
										@endforeach
									</ul>
								@else
									<p>Nessun piatto associato a questo ordine.</p>
								@endif
							</td>
							<td>€{{ number_format($order->total, 2) }}</td>
							<td>

							</td>
						</tr>
				</tbody>
			</table>
		<div class="text-center">
			<a href="{{ route('admin.orders.index') }}" class="btn btn-outline-success my-2 py-1 px-3">Torna agli ordini
				<i class="fa-solid fa-plate-wheat fa-lg fa-fw"></i></a>
		</div>
	</div>
@endsection
