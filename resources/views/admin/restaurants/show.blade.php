@extends('layouts.app')

@section('content')
	<div class="col-4 mt-3 m-auto">
		<div class="card p-0 h-100">
			<div class="col-12 text-center">
				@if (Str::startsWith($restaurants->image, 'http'))
					<img src="{{ $restaurants->image }}" class="img-fluid rounded-start" alt="immagine-ristorante">
				@else
					<img src="{{ asset('storage/' . $restaurants->image) }}" class="img-fluid rounded-start" alt="immagine-ristorante">
				@endif
			</div>
			<div class="row g-0 m-0">
				<div class="col-12">
					<div class="card-body">
						<p class="card-text"><b>Nome Ristorante:</b> {{ $restaurants->name }}</p>
						<p class="card-text"><b>P-Iva Ristorante:</b> {{ $restaurants->p_iva }}</p>
						<p class="card-text"><b>Indirizzo Ristorante:</b> {{ $restaurants->address }}</p>
					</div>
				</div>

				<div class="text-center">
					<a href="{{ route('admin.dashboard') }}" class="btn btn-outline-success my-2 py-1 px-3">Torna alla lista dei Piatti
						<i class="fa-solid fa-plate-wheat fa-lg fa-fw"></i></a>
				</div>
			</div>
		</div>
	</div>
@endsection
