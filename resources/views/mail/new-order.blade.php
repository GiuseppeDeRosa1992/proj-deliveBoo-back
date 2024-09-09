<div class="container text-center">
    <h2>Hai appena ricevuto un nuovo ordine!</h2>
    <p>L'ordine è da {{$order['name_client']}}</p>
    <p>La sua email è: {{$order['email_client']}} e il suo numero di telefono è {{$order['number_phone']}}</p>
    <div>
        <p>Ha ordinato:</p>
        <ul>
            {{-- <li v-for dish in dishes>
                {{$order['dishes.*.price_dish']}}
            </li> --}}
        </ul>
    </div>
</div>
