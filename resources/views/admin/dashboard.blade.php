@extends('layouts.admin')

@section('content')
	<div class="container-fluid mt-4">
		<div class="row justify-content-center">
			<div class="col-md-8 p-0">
				<div class="card">
					{{-- <div class="card-header">{{ __('Sei Loggato!') }}</div> --}}

					<div class="card-body">
						@if (session('status'))
							<div class="alert alert-success" role="alert">
								{{ session('status') }}
							</div>
						@endif


					</div>

					@include('partials.cardRestaurant')

					<p class="fs-5 mb-3 text-center">
						Totale piatti presenti: {{ $totalDishes }}
					</p>
					@include('partials.cardDish')
				</div>
			</div>
		</div>
	</div>
@endsection
