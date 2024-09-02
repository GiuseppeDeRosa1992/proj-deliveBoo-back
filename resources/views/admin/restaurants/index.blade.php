@extends('layouts.app')

@section('content')
	<div class="container">
		<h1 class="text-center py-2">Questi sono i Ristoranti</h1>

		<div class="text-center py-2">
			<button type="submit" class="btn btn-outline-primary">
				<a href="{{ route('admin.restaurants.create') }}"> Crea un nuovo ristorante<i class="fa-solid fa-pencil"></i></a>
			</button>
		</div>

		@include('partials.cardRestaurant')
	</div>
@endsection
