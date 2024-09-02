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


<form method="POST" action="{{route('admin.dishes.update', $dishes->id)}}" enctype="multipart/form-data">

@method('PUT')
@csrf

<div class="mb-3">
    <label for="restaurant_id" class="form-label">Modifica ID Piatto</label>
    <input type="text" id="restaurant_id" class="form-control" name="restaurant_id" value="{{ old('restaurant_id', $dishes->restaurant_id) }}">
    @error('restaurant_id')
        <div class="form-text text-danger">{{ $message }}</div>
    @enderror
</div>


<div class="mb-3">
    <label for="name" class="form-label">Modifica Nome Piatto</label>
    <input type="text" id="name" class="form-control" name="name" value="{{ old('name', $dishes->name) }}">
    @error('name')
        <div class="form-text text-danger">{{ $message }}</div>
    @enderror
</div>

<div class="mb-3">
    <label for="description" class="form-label">Modifica Descrizione Piatto</label>
    <input type="text" id="description" class="form-control" name="description" value="{{ old('description', $dishes->description) }}">
    @error('description')
        <div class="form-text text-danger">{{ $message }}</div>
    @enderror
</div>

<div class="mb-3">
    <label for="image" class="form-label">Modifica File Immagine Piatto</label>
    <input type="file" id="image" class="form-control" name="image" value="">
    @error('image')
        <div class="form-text text-danger">The Link Preview field is required.</div>
    @enderror
</div>

<div class="mb-3">
    <label for="price" class="form-label">Modifica Prezzo Piatto</label>
    <input type="text" id="price" class="form-control" name="price" value="{{ old('price', $dishes->price) }}" pattern="^\d+(.\d{1,2})?$">
    @error('price')
        <div class="form-text text-danger">{{ $message }}</div>
    @enderror
</div>

<div class="mb-3">
    <label for="visible" class="form-label">Modifica Visibilità Piatto</label>
    <input type="boolean" id="visible" class="form-control" name="visible" value="{{ old('visible', $dishes->visible) }}">
    @error('visible')
        <div class="form-text text-danger">{{ $message }}</div>
    @enderror
</div>

<button type="submit" class="btn btn-primary">Salva modifiche</button>


</form>

</div>


@endsection
