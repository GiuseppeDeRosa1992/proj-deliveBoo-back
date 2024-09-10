@extends('layouts.app')

@section('content')
    <div class="p-3 mb-4 bg-light">
        <div class="container d-flex justify-content-between align-items-center py-3">
            <h1 class="display-5 fw-bold">Crea un nuovo piatto</h1>
            <a href="{{ route('admin.dashboard') }}" class="btn btn-dark p-2">
                <i class="bi bi-arrow-left ">Torna indietro</i>
            </a>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="container">
        <form action="{{ route('admin.dishes.store') }}" method="post" enctype="multipart/form-data">
            @csrf



            <div class="mb-3">
                <label for="name" class="form-label">Nome</label>
                <input type="text" class="form-control" name="name" id="name" aria-describedby="nameHelper"
                    placeholder="Nome del piatto" value="{{ old('name') }}" required minlength="4" />
                <small id="nameHelper" class="form-text text-muted">Inserisci il nome del piatto</small>
                @error('name')
                    <div class="form-text text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Descrizione</label>
                <textarea class="form-control" name="description" id="description" rows="3" required minlength="10">{{ old('description') }}</textarea>
                @error('description')
                    <div class="form-text text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="image" class="form-label">Immagine</label>
                <input type="file" class="form-control" name="image" id="image" aria-describedby="imageHelper"
                    required accept="image/*" />
                <small id="imageHelper" class="form-text text-muted">Carica un'immagine per il piatto</small>
                @error('image')
                    <div class="form-text text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="price" class="form-label">Prezzo</label>
                <input type="text" class="form-control" name="price" id="price" aria-describedby="priceHelper"
                    placeholder="Prezzo del piatto" value="{{ old('price') }}" pattern="^\d+(\.\d{1,2})?$"
                    title="Inserisci un prezzo valido, ad esempio 12.34 (fino a 5 caratteri totali, inclusi fino a 2 decimali)"
                    maxlength="7" required />
                <small id="priceHelper" class="form-text text-muted">Inserisci il prezzo del piatto (fino a 5 caratteri,
                    inclusi decimali)</small>
                @error('price')
                    <div class="form-text text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="visible" class="form-label">Visibile</label>
                <select class="form-select" name="visible" id="visible" required>
                    <option value="1" {{ old('visible') == '1' ? 'selected' : '' }}>Visibile</option>
                    <option value="0" {{ old('visible') == '0' ? 'selected' : '' }}>Non visibile</option>
                </select>
                @error('visible')
                    <div class="form-text text-danger">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">
                Salva il Piatto.
            </button>
        </form>
    </div>
@endsection
