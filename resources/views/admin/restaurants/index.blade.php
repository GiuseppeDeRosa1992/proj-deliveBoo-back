@extends('layouts.app')

@section('content')
    <h1>Questi sono i Ristoranti</h1>

    <button type="submit" class="btn btn-outline-primary">
        <a href="{{ route('admin.restaurants.create') }}"> Crea un nuovo ristorante<i class="fa-solid fa-pencil"></i></a>
    </button>

    @include('partials.cardRestaurant')
@endsection
