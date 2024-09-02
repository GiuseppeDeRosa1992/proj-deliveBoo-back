@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="p-3 mb-4 bg-light text-center">
			<div class="container d-flex justify-content-between align-items-center py-3">
				<h1 class="display-5 fw-bold py-3 m-0">Crea un nuovo Piatto</h1>
				<a href="{{ route('admin.dishes.create') }}" class="btn btn-dark p-2">
					Crealo Qui
				</a>
			</div>
		</div>
		<h2 class="m-0 py-2 text-center">Questi sono i nostri Piatti</h2>

		@include('partials.cardDish')
	</div>
@endsection
