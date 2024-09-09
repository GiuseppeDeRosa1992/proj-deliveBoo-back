<section>
	<div class="text-center px-2 row m-0 justify-content-center">
		@foreach ($restaurants as $restaurant)
			{{-- <div class="col-4 mt-3"> --}}
			{{-- <div class="card p-0 h-100"> --}}
			<div class="row g-0 m-0">
				<div class="col-12">
					{{-- @if (Str::startsWith($restaurant->image, 'http'))
						<img src="{{ $restaurant->image }}" class="img-fluid rounded-start mb-2" alt="{{ $restaurant->name }}">
					@else
						<img src="{{ asset('storage/' . $restaurant->image) }}" class="img-fluid rounded-start mb-2"
							alt="{{ $restaurant->name }}">
					@endif --}}
					<h3 class="card-title"><b>Nome Ristorante:</b> {{ $restaurant->name }}</h3>
				</div>
			</div>
			<div>
				<a href="{{ route('admin.restaurants.show', $restaurant->id) }}"
					class="btn btn-outline-success my-2 py-1 px-3">Dettagli
					Ristorante
					<i class="fa-solid fa-info"></i></a>
					<a href="{{ route('admin.orders.index') }}"
						class="btn btn-outline-primary my-2 py-1 px-3">Ordini
						<i class="fa-solid fa-info"></i></a>
			</div>

			{{-- <div>
						<a href="{{ route('admin.dishes.index') }}" class="btn btn-outline-success my-2 py-1 px-3">Piatti
							Ristorante
							<i class="fa-solid fa-plate-wheat fa-lg fa-fw"></i></a>
					</div> --}}


			{{-- <div>
						<a href="{{ route('admin.restaurants.edit', $restaurant->id) }}"
							class="btn btn-outline-success my-2 py-1 px-3">Modifica
							Ristorante
							<i class="fa-solid fa-pencil"></i></a>
					</div>


					<!-- Modal trigger button -->
					<button type="button" class="btn btn-outline-danger" data-bs-toggle="modal"
						data-bs-target="#modal-{{ $restaurant->id }}">Elimina Ristorante
						<i class="fa-solid fa-trash-can"></i>
					</button> --}}

			<!-- Modal Body -->
			<!-- if you want to close by clicking outside the modal, delete the last endpoint:data-bs-backdrop and data-bs-keyboard -->

			<!--
					<div class="modal fade" id="modal-{{ $restaurant->id }}" tabindex="-1" data-bs-backdrop="static"
						data-bs-keyboard="false" role="dialog" aria-labelledby="modalTitle-{{ $restaurant->id }}" aria-hidden="true">
						<div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-sm" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title" id="modalTitle-{{ $restaurant->id }}">
										Delete current restaurant
									</h5>
									<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
								</div>

								<div class="modal-body">
									Deleting restaurant name: {{ $restaurant->name }}
									⚡Danger, you cannot undo this operation
								</div>
								<div class="modal-footer justify-content-center">
									{{-- CREO FORM PER CANCELLARE UN FUMETTO DAL DATABASE GLI DO LA ROTTA DESTROY E IL METODO POST POI SOTTO LO CAMBIO NEL METODO DELETE --}}
									<form method="POST" action="{{ route('admin.restaurants.destroy', $restaurant->id) }}">
										@csrf

										@method('DELETE')
										<button type="submit" href="" class="btn btn-outline-danger my-2" data-bs-dismiss="modal">
											<i class="fa-solid fa-trash-can"></i>
										</button>
									</form>

								</div>
							</div>
						</div>
					</div>
				-->
		@endforeach
	</div>
</section>
