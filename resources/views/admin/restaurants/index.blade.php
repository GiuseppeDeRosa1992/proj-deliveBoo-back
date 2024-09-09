@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="text-center py-2">Questo è il tuo Ristorante</h1>
        

        @include('partials.cardRestaurant')
    </div>
@endsection
