<section>

	<div class="text-center row m-0 align-items-center">
		<div class="col-12 p-0">
			<table class="table table-striped p-0">
				<thead>
					<tr>
						<th scope="col" class="py-1">Nome</th>
						<th scope="col" class="py-1">Immagine</th>
						<th scope="col" class="py-1">Dettagli</th>
						<th scope="col" class="py-1">Modifica</th>
						<th scope="col" class="py-1">Elimina</th>
					</tr>
				</thead>
				<tbody>
					@foreach ($dishes as $dish)
						<tr>
							<th scope="row" class="p-0 align-middle">{{ $dish->name }}</th>
							<td class="p-0 align-middle py-1">
								@if (Str::startsWith($dish->image, 'http'))
									<img src="{{ $dish->image }}" class="img-fluid my-w rounded" alt="immagine-ristorante">
								@else
									<img src="{{ asset('storage/' . $dish->image) }}" class="img-fluid my-w" />
								@endif
							</td>
							<td class="p-0 align-middle py-1">
								<div>
									<a href="{{ route('admin.dishes.show', $dish->id) }}" class="btn btn-outline-primary py-2 px-3">
										<i class="fa-solid fa-info"></i></a>
								</div>
							</td>
							<td class="p-0 align-middle py-1">
								<div>
									<a href="{{ route('admin.dishes.edit', $dish->id) }}" class="btn btn-outline-primary py-2 px-2">
										<i class="fa-solid fa-pencil"></i></a>
								</div>
							</td>
							<td class="p-0 align-middle py-1">
								<div>
									<button type="button" class="btn btn-outline-danger" data-bs-toggle="modal"
										data-bs-target="#modal-{{ $dish->id }}">
										<i class="fa-solid fa-trash-can"></i>
									</button>
								</div>
							</td>
						</tr>
						<!-- Modal Body -->
						<!-- if you want to close by clicking outside the modal, delete the last endpoint:data-bs-backdrop and data-bs-keyboard -->
						<div class="modal fade" id="modal-{{ $dish->id }}" tabindex="-1" data-bs-backdrop="static"
							data-bs-keyboard="false" role="dialog" aria-labelledby="modalTitle-{{ $dish->id }}" aria-hidden="true">
							<div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-sm" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="modalTitle-{{ $dish->id }}">
											Elimina questo piatto
										</h5>
										<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
									</div>

									<div class="modal-body">
										Elimina questo piatto:<br/><Strong>{{ $dish->name }}</Strong><br/>
										⚡Attento, non puoi annullare questa operazione
									</div>
									<div class="modal-footer justify-content-center">
										{{-- CREO FORM PER CANCELLARE UN FUMETTO DAL DATABASE GLI DO LA ROTTA DESTROY E IL METODO POST POI SOTTO LO CAMBIO NEL METODO DELETE --}}
										<form method="POST" action="{{ route('admin.dishes.destroy', $dish->id) }}">
											@csrf

											@method('DELETE')
											<button type="submit" href="" class="btn btn-outline-danger my-2" data-bs-dismiss="modal">
												Elimina
												<i class="fa-solid fa-trash-can"></i>
											</button>
										</form>

									</div>
								</div>
							</div>
						</div>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
</section>


{{-- <div class="col-4 mt-3">
				<div class="card p-0 h-100">
					<div class="row g-0 m-0">
						<div class="col-12">
							@if (Str::startsWith($dish->image, 'http'))
								<img src="{{ $dish->image }}" class="card-img-top mb-2" alt="immagine-ristorante">
							@else
								<img src="{{ asset('storage/' . $dish->image) }}" class="card-img-top mb-2" />
							@endif
						</div>
						<h5 class="card-title"><b>Nome Piatto:</b> {{ $dish->name }}</h5>
					</div>
					<div>
						<a href="{{ route('admin.dishes.show', $dish->id) }}" class="btn btn-outline-primary my-2 py-1 px-3">Dettagli
							Piatto
							<i class="fa-solid fa-info"></i></a>
					</div>
					<div>
						<a href="{{ route('admin.dishes.edit', $dish->id) }}" class="btn btn-outline-primary my-2 py-1 px-2">Modifica
							Piatto
							<i class="fa-solid fa-pencil"></i></a>
					</div>
					<!-- Modal trigger button -->
					<div class="py-2">
						<button type="button" class="btn btn-outline-danger" data-bs-toggle="modal"
							data-bs-target="#modal-{{ $dish->id }}">Elimina Piatto
							<i class="fa-solid fa-trash-can"></i>
						</button>
					</div> --}}
