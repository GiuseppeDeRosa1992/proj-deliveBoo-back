@extends('layouts.admin')

@section('content')
	<div class="container">

		<div class="mb-4 text-start">
            <a href="{{ route('admin.dashboard') }}" class="btn btn-primary btn-dark p-2 mt-4">
                Torna alla Home
            </a>
        </div>

		<div class="p-3 mb-4 bg-light text-center">
			<div class="container d-flex justify-content-between align-items-center py-3">
				<h1 class="display-5 fw-bold py-3 m-0">Crea un nuovo Piatto</h1>
				<a href="{{ route('admin.dishes.create') }}" class="btn btn-dark p-2">
					Crealo Qui
				</a>
			</div>
		</div>

		<h2 class="m-0 py-2 text-center">Questi sono i nostri Piatti</h2>
		<p class="fs-5 mb-3">
            Totale piatti presenti: {{ $totalDishes }}
        </p>
		@include('partials.cardDish')
	</div>
@endsection
