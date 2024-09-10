@extends('layouts.app')
@section('content')
    <div class="container">
        {{-- MESSAGGIO DI ERRORE SE NON SI COMPLETANO I CAMPI CHE SONO OBBLIGATORI --}}
        <div>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>


        <form method="POST" action="{{ route('admin.dishes.update', $dishes->id) }}" enctype="multipart/form-data">

            @method('PUT')
            @csrf


            <div class="mb-3">
                <label for="name" class="form-label">Modifica Nome Piatto</label>
                <input type="text" id="name" class="form-control" name="name"
                    value="{{ old('name', $dishes->name) }}" required minlength="4">
                @error('name')
                    <div class="form-text text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Modifica Descrizione Piatto</label>
                <input type="text" id="description" class="form-control" name="description"
                    value="{{ old('description', $dishes->description) }}" required minlength="10">
                @error('description')
                    <div class="form-text text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="image" class="form-label">Modifica File Immagine Piatto</label>
                <input type="file" id="image" class="form-control" name="image" value="" accept="image/*"
                    required>
                @error('image')
                    <div class="form-text text-danger">Inserisci un'immagine.</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="price" class="form-label">Modifica Prezzo Piatto</label>
                <input type="text" id="price" class="form-control" name="price"
                    value="{{ old('price', $dishes->price) }}" pattern="^\d+(.\d{1,2})?$" required>
                @error('price')
                    <div class="form-text text-danger">{{ $message }}</div>
                @enderror
            </div>


            <div class="mb-3">
                <label for="visible" class="form-label">Modifica Visibilità Piatto</label>
                <select class="form-select" name="visible" id="visible" required>
                    <option value="1" {{ old('visible') == '1' ? 'selected' : '' }}>Visibile</option>
                    <option value="0" {{ old('visible') == '0' ? 'selected' : '' }}>Non visibile</option>
                </select>
                @error('visible')
                    <div class="form-text text-danger">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Salva modifiche</button>

            <a href="{{ route('admin.dashboard') }}" class="btn btn-dark p-2">
                Torna Alla lista Piatti
            </a>

        </form>

    </div>


@endsection
