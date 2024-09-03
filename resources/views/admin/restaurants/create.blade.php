@extends('layouts.admin')

@section('content')
	<div class="container">
		<h1 class="text-center py-2 text-success">Aggiungi il tuo ristorante su Deliveboo</h1>

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


		<form method="POST" action="{{ route('admin.restaurants.store') }}" enctype="multipart/form-data">
			@csrf

            {{-- Step 1: Nome Ristorante --}}
			<div class="mb-3">
				<label for="title" class="form-label">Come si chiama il tuo ristorante?</label>
				<input type="text" class="form-control" name="name" value="{{ old('name') }}" required>
				@error('name')
					<div class="form-text text-danger">{{ $message }}</div>
				@enderror
			</div>

            {{-- Step 2: Immagine Ristorante --}}
			<div class="mb-3">
				<label for="image" class="form-label">Scegli l'immagine per il tuo ristorante</label>
				<input type="file" class="form-control" name="image" placeholder="" required accept="image/*">
				@error('image')
					<div class="form-text text-danger">The Image field is required.</div>
				@enderror
			</div>

            {{-- Step 3: PIva Ristorante --}}
            <div class="mb-3">
				<label for="description" class="form-label">Qual'è la tua Partita Iva?</label>
				<input type="text" class="form-control" name="p_iva" value="{{ old('p_iva') }}" pattern="\d{11}" required >
				@error('p_iva')
					<div class="form-text text-danger">{{ $message }}</div>
				@enderror
			</div>

            {{-- Step 4: Indirizzo Ristorante --}}
			<div class="mb-3">
				<label for="address" class="form-label">Qual'è l'indirizzo del ristorante</label>
				<input type="text" class="form-control" name="address" value="{{ old('address') }}" required>
				@error('address')
					<div class="form-text text-danger">{{ $message }}</div>
				@enderror
			</div>


			<div class="mb-3">
                @foreach ($types as $type)
                    <div>
                        <label for="icon" class="form-check-label">{{ $type->name }}</label>
                        <input type="checkbox" name="types[]" id="" value="{{ $type->id }}">
                    </div>
                @endforeach

                @error('types[]')
                    <div class="form-text text-danger">The Link Preview field is required.</div>
                @enderror
            </div>


			<button type="submit" class="btn btn-outline-success">Aggiungi il tuo ristorante
				<i class="fa-solid fa-plus"></i>
			</button>
		</form>
	</div>
@endsection
