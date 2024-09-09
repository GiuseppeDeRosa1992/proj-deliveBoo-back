<!DOCTYPE html>
<html>
<head>
    <title>Conferma del Tuo Ordine</title>
</head>
<body>
    <h1>Conferma del Tuo Ordine</h1>
    <p>Grazie per aver effettuato un ordine con noi!</p>
    <p>Dettagli del tuo ordine:</p>
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
    <p>Riceverai presto una notifica quando il tuo ordine sarà pronto. Grazie per aver scelto il nostro ristorante!</p>
</body>
</html>
