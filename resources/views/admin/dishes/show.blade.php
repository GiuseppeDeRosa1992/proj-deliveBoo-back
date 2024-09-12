@extends('layouts.admin')

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

                <h2>{{ $dishes->name }}</h2>

                <p>
                    <b>Descrizione:</b> {{ $dishes->description }}
                </p>

                <p>
                    <b>Prezzo: €</b> {{ $dishes->price }}
                </p>

                <a href="{{ route('admin.dashboard') }}" class="btn btn-dark p-2">
                    Torna alla lista piatti
                </a>
            </div>
        </div>
    </div>
@endSection
