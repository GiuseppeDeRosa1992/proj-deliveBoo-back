@extends('layouts.app')

@section('content')
    <div class="p-3 mb-4 bg-light">
        <div class="container d-flex justify-content-between align-items-center py-3">
            <h1 class="display-5 fw-bold">Crea un nuovo piatto</h1>
            <a href="{{ route('admin.dishes.create') }}" class="btn btn-dark">
                <i class="bi bi-arrow-left">crealo qui</i>
            </a>
        </div>
    </div>
    <h1>Questi sono i Piatti</h1>

    @include('partials.cardDish')
@endsection
