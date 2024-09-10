@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Ordini </h1>

        @if ($orders->isEmpty())
            <p>Nessun ordine disponibile.</p>
        @else
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID Ordine</th>
                        <th>Nome Cliente</th>
                        <th>Email Cliente</th>
                        <th>Numero di Telefono</th>
                        <th>Indirizzo</th>
                        <th>Data Ordine</th>
                        <th>Totale</th>

                        <th>Azioni</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($orders as $order)
                        <tr>
                            <td>{{ $order->id }}</td>
                            <td>{{ $order->name_client }}</td>
                            <td>{{ $order->email_client }}</td>
                            <td>{{ $order->number_phone }}</td>
                            <td>{{ $order->address_client }}</td>
                            <td>{{ $order->created_at->format('d/m/Y H:i') }}</td>
                            <td>€{{ number_format($order->total, 2) }}</td>

                            <td>
                                <!-- <a href="{{ route('admin.orders.show', $order->id) }}" class="btn btn-primary">Visualizza</a> -->
                                <form action="{{ route('admin.orders.destroy', $order->id) }}" method="POST"
                                    style="display:inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger"
                                        onclick="return confirm('Sei sicuro di voler eliminare questo ordine?')">Elimina</button>
                                </form>
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
