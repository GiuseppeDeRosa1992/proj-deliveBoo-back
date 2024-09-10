@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row m-0">
            <div class="col-4 p-0">
                @if (Str::startsWith($dishes->image, 'http'))
                    <img src="{{ $dishes->image }}" class="img-fluid rounded-start" alt="immagine-ristorante">
                @else
                    <img src="{{ asset('storage/' . $dishes->image) }}" class="w-50" style="height:50vh" />
                @endif
            </div>
            <div class="col-8 p-4">

                <h2>Nome Piatto: {{ $dishes->name }}</h2>

                <p>
                    <b>Descrizione Piatto:</b> {{ $dishes->description }}
                </p>

                <p>
                    <b>Prezzo Piatto: €</b> {{ $dishes->price }}
                </p>

                <a href="{{ route('admin.dashboard') }}" class="btn btn-dark p-2">
                    Torna Alla lista Piatti
                </a>
            </div>
        </div>
    </div>
@endSection
