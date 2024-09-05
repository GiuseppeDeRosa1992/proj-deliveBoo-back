@extends('layouts.app')

@section('content')
	<h1 class="py-2 m-0 text-primary text-center">Modifica Il tuo ristorante</h1>
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

		<form method="POST" action="{{ route('admin.restaurants.update', $restaurants->id) }}" enctype="multipart/form-data">
			@method('PUT')

			@csrf
			{{-- Step 1: Nome Ristorante --}}
			<div class="mb-3">
				<label for="title" class="form-label">Come si chiama il tuo ristorante?</label>
				<input type="text" class="form-control" name="name" value="{{ old('name', $restaurants->name) }}">
				@error('name')
					<div class="form-text text-danger">{{ $message }}</div>
				@enderror
			</div>

			{{-- Step 2: Immagine Ristorante --}}
			<div class="mb-3">
				<label for="image" class="form-label">Scegli una nuova immagine per il tuo ristorante</label>
				<input type="file" class="form-control" name="image">
				@error('image')
					<div class="form-text text-danger">Inserisci un'immagine.</div>
				@enderror
			</div>

			{{-- Step 3: PIva Ristorante --}}
			<div class="mb-3">
				<label for="description" class="form-label">Qual'è la tua Partita Iva?</label>
				<input type="text" class="form-control" name="p_iva" value="{{ old('p_iva', $restaurants->p_iva) }}">
				@error('p_iva')
					<div class="form-text text-danger">{{ $message }}</div>
				@enderror
			</div>

			{{-- Step 4: Indirizzo Ristorante --}}
			<div class="mb-3">
				<label for="address" class="form-label">Qual'è il tuo nuovo indirizzo del ristorante</label>
				<input type="text" class="form-control" name="address" value="{{ old('address', $restaurants->address) }}">
				@error('address')
					<div class="form-text text-danger">{{ $message }}</div>
				@enderror
			</div>


			<button type="submit" class="btn btn-outline-primary">Modifica Il tuo ristorante
				<i class="fa-solid fa-pencil"></i>
			</button>

		</form>
	</div>
@endsection
