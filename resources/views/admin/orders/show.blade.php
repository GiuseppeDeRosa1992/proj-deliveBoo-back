@extends('layouts.admin')

@section('content')
	<div class="container my-3">
		<h1 class="text-center">Dettaglio Ordine</h1>

            <div class="card col-12 col-6-sm p-3">
                <p>Nome: <strong>{{ $order->name_client }}</strong></p>
                <p>Email: <strong>{{ $order->email_client }}</strong></p>
                <p>Numero di telefono: <strong>{{ $order->number_phone }}</strong></p>
                <p>Indirizzo di consegna: <strong>{{ $order->address_client }}</strong></p>
                <p>Ordine effettuato il: <strong>{{ $order->created_at->format('d/m/Y H:i') }}</strong></p>
                <div class="col-8">
                    <ul>
                        @foreach ($order->dishes as $dish)
                            <li>
                                <strong>{{ $dish->pivot->quantity }}x</strong> - <strong>{{ $dish->name }}</strong> -
                                <strong>€{{ number_format($dish->price, 2) }}</strong>

                            </li>
                        @endforeach
                    </ul>
                    <p>Totale: <strong>€{{ number_format($order->total, 2) }}</strong></p>
                </div>

	        </div>
            <div class="text-center">
		        <a href="{{ route('admin.orders.index') }}" class="btn btn-outline-success my-2 py-1 px-3">Torna agli ordini
		        <i class="fa-solid fa-truck-fast"></i></a>
            </div>
	</div>
@endsection
