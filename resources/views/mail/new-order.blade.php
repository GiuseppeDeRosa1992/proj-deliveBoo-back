<!DOCTYPE html>
<html>

<head>
    <title>Nuovo Ordine</title>
</head>

<body>
    <h1>Nuovo Ordine Ricevuto</h1>
    <p>Dettagli dell'ordine:</p>
    <ul>
        <li><strong>Nome:</strong> {{ $order['name_client'] }}</li>
        <li><strong>Email:</strong> {{ $order['email_client'] }}</li>
        <li><strong>Numero di Telefono:</strong> {{ $order['number_phone'] }}</li>
        <li><strong>Indirizzo:</strong> {{ $order['address_client'] }}</li>
        <li><strong>Totale:</strong> €{{ $order['total'] }}</li>
    </ul>
    <h2>Dettagli del Carrello:</h2>
    <ul>
        @foreach ($order['dishes'] as $dish)
            <li>{{ $dish['name_dish'] }} - €{{ $dish['price_dish'] }} x {{ $dish['quantity'] }}</li>
        @endforeach
    </ul>
</body>

</html>
