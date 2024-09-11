@extends('layouts.admin')

@section('content')
	<div class="container my-3">
		<h1 class="text-center">Ordine n {{$order->id}}</h1>

            <div class="card col-12 col-6-sm p-3">
                <p>Numero Identificativo Ordine <strong>{{ $order->id }}</strong></p>
                <p>Nome Cliente <strong>{{ $order->name_client }}</strong></p>
                <p>Email Cliente <strong>{{ $order->email_client }}</strong></p>
                <p>Numero di telefono Cliente <strong>{{ $order->number_phone }}</strong></p>
                <p>Indirizzo di consegna <strong>{{ $order->address_client }}</strong></p>
                <p>Ordine effettuato il <strong>{{ $order->created_at->format('d/m/Y H:i') }}</strong></p>
                <div class="col-8">
                    <ul>
                        @foreach ($order->dishes as $dish)
                            <li>
                                <strong>{{ $dish->name }}</strong> - €<strong>{{ number_format($dish->price, 2) }}</strong> - Quantità:
                                <strong>{{ $dish->pivot->quantity }}</strong>
                            </li>
                        @endforeach
                    </ul>
                    <p>Totale Ordine: €<strong>{{ number_format($order->total, 2) }}</strong></p>
                </div>

	        </div>
            <div class="text-center">
		        <a href="{{ route('admin.orders.index') }}" class="btn btn-outline-success my-2 py-1 px-3">Torna agli ordini
		        <i class="fa-solid fa-truck-fast"></i></a>
            </div>
	</div>
@endsection
