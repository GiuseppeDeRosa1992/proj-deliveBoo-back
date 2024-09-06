@extends('layouts.admin')

@section('content')
	<div class="container-fluid mt-4">
		<div class="row justify-content-center">
			<div class="col-md-8">
				<div class="card">
					<div class="card-header">{{ __('Pannello di Controllo') }}</div>

					<div class="card-body">
						@if (session('status'))
							<div class="alert alert-success" role="alert">
								{{ session('status') }}
							</div>
						@endif

						{{ __('Sei Loggato!') }}
					</div>

					@include('partials.cardRestaurant')
				</div>
			</div>
		</div>
	</div>
@endsection
